# Server Thread Resource

## Thread

Threads are a feature in Geometry Dash that replaces the legacy message system from 2.0.

Unlike most other server objects, threads do not have a typical `key:value:key:value` pair. Instead, they are a fixed list of values separated by colons `:`, without any keys.
<!-- tabs:start -->

#### **Thread Example Response**
```md
49028:0::OmV5ZXM6:0:26068292:8 minutes:3::26068292:0:0:0:0:0:0:0:0:0:0:0:dGVzdHR0dHQ=:globe:1792167374:0:0
```
<!-- tabs:end -->

A list of all known values can be found in the table below

Values indicated with an asterisk (*) are only returned for DM threads, and are empty or 0 for group threads

Values indicated with a dagger (†) are only returned for group threads, and are empty or 0 for DM threads

### Thread Structure

| Index | Name/Value  | Type | Description |
| ----- | ----------- | ---- | ----------- |
| 1     | threadID      | **Integer** | The thread ID
| 2     | accountID     | **Integer** | The account ID of the user on the other end of the thread
| 3     | username*     | **String** | The username of the user on the other end of the thread encoded in [Base64](/topics/encryption/base64.md)
| 4     | title†        | **String** | The title of the group thread encoded in [Base64](/topics/encryption/base64.md)
| 5     | newMessages   | **Integer** | The amount of new messages in the thread
| 6     | lastSenderID | **String** | The account ID of the person who sent the last message
| 7     | lastMessage   | **String** | How long ago the last message in the thread was sent (e.g. "13 hours")
| 8     | members		   | **Integer** | The amount of members in the thread
| 9     | lastSenderUsername | **String** | The username of the person who sent the last message encoded in [Base64](/topics/encryption/base64.md)
| 10    | ownerID	   | **Integer** | The account ID of the user who owns this thread
| 11    | muted		   | **Bool** | Whether you have muted the thread or not
| 12    | unknown		   | **Integer** | Seems to always be 0
| 13    | threadType?		 | **Bool** | Unknown, but seems to be 0 if this is a group thread and 1 if it's a DM thread
| 14    | unknown		 | **Integer** | Seems to always be 0
| 15  | pinned		 | **Integer** | Whether you have pinned the thread or not
| 16  | icon*  	 | **Integer** | The icon ID of the user on the other end of the thread
| 17  | color1*  	 | **Integer** | The primary color of the user on the other end of the thread
| 18  | color2*  	 | **Integer** | The secondary color of the user on the other end of the thread
| 19  | color3*  	 | **Integer** | The glow color of the user on the other end of the thread
| 20  | iconType*  	 | **Integer** | The icon type of the user on the other end of the thread
| 21  | special*  	 | **Integer** | Whether this person has glow enabled
| 22  | description†  	 | **Integer** | The description of this group thread encoded in [Base64](/topics/encryption/base64.md)
| 23  | emoteIcon†  	 | **Integer** | The emote icon used for this group thread
| 24  | lastMessageTimestamp | **Integer** | The UNIX timestamp of the last message
| 25  | modBadgeLevel?* | **Integer** | Presumably the mod badge of the user on the other end of the thread
| 26  | unknown		 | **Integer** | Seems to always be 0
