#!/usr/bin/env python
r"""Notification API specific fixes for notification_api.json.

The bugs eBay ships in every spec are handled by ..\_tools\ebay_patch_spec.py,
which build.bat runs first. What is left here is specific to this API:

  * GET /config has the operationId "getConfig", which is also the name of the
    accessor openapi-generator puts on every Api class. The generated
    ConfigApi then declares getConfig() twice and cannot be loaded at all
    ("Cannot redeclare ..."), which is why the class has been broken since the
    SDK was first generated. Renamed to getNotificationConfig.
  * The operations that answer with no payload (204 No Content, and 202 for
    testSubscription) declare the Error schema as their success body. The
    generator then json_decodes the empty body, throws an ApiException with
    the 2xx status code and every successful write looks like a failure. The
    body is dropped, so these methods return null on success, like the 201
    create operations.

Idempotent -- re-run after every download.
"""

from __future__ import annotations

import collections
import json

SPEC = "notification_api.json"
RENAMES = {"getConfig": "getNotificationConfig"}
METHODS = ("get", "post", "put", "delete", "patch")
ERROR_REF = "#/components/schemas/Error"


def main() -> None:
    with open(SPEC, encoding="utf-8") as handle:
        spec = json.load(handle, object_pairs_hook=collections.OrderedDict)

    renamed, emptied = [], []
    for path_item in spec["paths"].values():
        for method, operation in path_item.items():
            if method not in METHODS:
                continue
            new_id = RENAMES.get(operation.get("operationId"))
            if new_id:
                renamed.append(f"{operation['operationId']} -> {new_id}")
                operation["operationId"] = new_id
            for code, response in operation.get("responses", {}).items():
                content = response.get("content") or {}
                if code.startswith("2") and content and all(
                    (media or {}).get("schema") == {"$ref": ERROR_REF} for media in content.values()
                ):
                    del response["content"]
                    emptied.append(f"{operation['operationId']} ({code})")

    with open(SPEC, "w", encoding="utf-8", newline="\n") as handle:
        json.dump(spec, handle, indent=2, ensure_ascii=False)
        handle.write("\n")

    print(f"operationIds renamed: {', '.join(renamed) or 'none'}")
    print(f"Error bodies dropped from 2xx responses: {', '.join(emptied) or 'none'}")


if __name__ == "__main__":
    main()
