# uploadGJEditorSound.php

Uploads a sound pack to the servers

## Parameters

| Parameter       | Explanation | Required |
| --------------- | ----------- | -------- |
| `accountID`     | <ParamDesc name="accountID"/>| Yes      | <!--a-->
| `gjp2`          | <ParamDesc name="gjp2"/> | Yes      | <!--a-->
| `secret`        | <ParamDesc name="secret" type="common"/>| Yes      | <!--a-->
| `soundName`     | The name of the pack, in plain text | Yes      | <!--a-->
| `soundData`     | The sound pack's data | Yes      | <!--a-->
| `soundDesc`     | The description of the pack, in [URL-safe base64](/topics/encryption/base64.md) |        | <!--a-->
| `actionCount`   | Sent as the amount of actions with a sound attached to them, but doesn't seem to do anything |        | <!--a-->
| `soundCount`    | Send as the amount of sounds used, but doesn't seem to do anything |        | <!--a-->
| `emote`         | The emote to be used as the icon of the pack |        | <!--a-->
| `soundID`       | The ID of the list if updating to a newer version, otherwise `0` |      | <!--a-->
| `unlisted`      | Set to `4` if the pack should be unlisted, and to `3` if the pack should be unlisted and only viewable by friends |       | <!--a-->
| `gameVersion`   | <ParamDesc name="gameVersion"/>|       | <!--a-->
| `binaryVersion` | <ParamDesc name="binaryVersion"/> |          | <!--a-->
| `udid`          | <ParamDesc name="udid"/> |          | <!--a-->
| `uuid`          | <ParamDesc name="uuid"/> |          | <!--a-->
| `dvs`           | <ParamDesc name="dvs"/> |          | <!--a-->

## Response

Returns the ID of the uploaded pack, `-100` if the wrong secret is provided, `-17` if the name contains a swear word, or a [Custom Error Message](/topics/custom_error.md) for other errors.

## Example

<!-- tabs:start -->

### **Python**

```py
import requests

data = {
    "accountID": 173831, # This is DevExit's account ID
    "gjp2": "*******", # This would be DevExit's password encoded with GJP2 encryption
    "soundName": "Aqua Pack", # This is the pack name
    "soundData": "H4sIAAAAAAAACl2P2w3EIAwEG7JO2IAfpP--gpdATvlaGNnLwBcTayMhzpM3ibHSn7TkpTwTIq55Lj-lSixjo89FqU2Ayr3K4X0gdAWanU-zrgItiB4Jzf7UtlKFkpze6PhFvECh2HyaYGmOgPQE2D7PGqxmVEi8XO26ARRIq7ceAQAA",
    "soundDesc": "VHJpZWQgdG8gbWFrZSBhbiBhY3R1YWwgZWRpdG9yIHNvdW5kIHBhY2s=",
    "emote": "blob",
    "secret": "Wmfd2893gb7"
}

headers = {
	"User-Agent": ""
}

url = "https://www.boomlings.com/database/uploadGJEditorSound.php"

req = requests.post(url=url, data=data, headers=headers)
print(req.text)
```

<!-- tabs:end -->

**Response**

```plain
53819
```

