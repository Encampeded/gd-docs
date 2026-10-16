# muteGJUser.php

Mutes or unmutes a user from sending you notifications

## Parameters

| Parameter       | Explanation | Required |
| --------------- | ----------- | -------- |
| `targetAccountID`| Who to mute / unmute | Yes | <!--a-->
| `accountID`     | <ParamDesc name="accountID"/> | Yes | <!--a-->
| `gjp2`          | <ParamDesc name="gjp2"/> | Yes | <!--a-->
| `secret`        | <ParamDesc name="secret" type="common"/> | Yes | <!--a-->
| `mute`| 1 to mute, 0 to unmute. If left out, defaults to 1 |  | <!--a-->
| `gameVersion`   | <ParamDesc name="gameVersion"/> |  | <!--a-->
| `binaryVersion` | <ParamDesc name="binaryVersion"/> |  | <!--a-->
| `udid`          | <ParamDesc name="udid"/> |  | <!--a-->
| `uuid`          | <ParamDesc name="uuid"/> |  | <!--a-->
| `dvs`           | <ParamDesc name="dvs"/> |  | <!--a-->

## Response

Always 1 if the correct values are provided, even if the account does not exist. 
  
However, if you mute a nonexistent account ID, your muted account list will break, displaying "Something went wrong"
