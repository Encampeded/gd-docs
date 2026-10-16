# getGJNotifications.php

Fetch your notifications

## Parameters

| Parameter       | Explanation | Required |
| --------------- | ----------- | -------- |
| `accountID`     | <ParamDesc name="accountID"/> | Yes | <!--a-->
| `gjp2`          | <ParamDesc name="gjp2"/> | Yes | <!--a-->
| `secret`        | <ParamDesc name="secret" type="common"/> | Yes | <!--a-->
| `mask`          | Bit mask for enabled/disabled notification types, see below for details. Defaults to `65535` (all enabled) if left out |  | <!--a-->
| `page`          | Which page of notifications you want, starting at 0. Defaults to the first if left out |  | <!--a-->
| `total`         | The amount of notifications to fetch, defaults to 10. Seemingly has no upper boundary |  | <!--a-->
| `gameVersion`   | <ParamDesc name="gameVersion"/> |  | <!--a-->
| `binaryVersion` | <ParamDesc name="binaryVersion"/> |  | <!--a-->
| `udid`          | <ParamDesc name="udid"/> |  | <!--a-->
| `uuid`          | <ParamDesc name="uuid"/> |  | <!--a-->
| `dvs`           | <ParamDesc name="dvs"/> |  | <!--a-->

## Bit Mask

The `mask` parameter represents which notification types are enabled/disabled. As of now there are 6 toggleable notification types:
  
`XXXXXXXXX365X421`

- 1 - Friend Uploads
- 2 - Followed Uploads
- 3 - Friend Rates
- 4 - Downloads
- 5 - Followers
- 6 - Friend Accepts
- X - always 1, no effect if set to 0

## Response

Always 1 if the correct values are provided, even if the account does not exist. 
  
However, if you mute a nonexistent account ID, your muted account list will break, displaying "Something went wrong"
