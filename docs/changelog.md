---
aside: true
---
# Changelog

> [!NOTE]
> Happy 2.209 release! This page will be updated very soon with every update-related change.

> [!IMPORTANT]
> Right now, the changelog for 2.209 includes only server-related changes. The client-related changes require looking at a decomp of the game which will take longer.

## 2.209

- `binaryVersion`: `51`
- New level keys [`62` and `63`](/resources/server/level#:~:text=62,was%20last%20updated) with exact upload and update times
- New level key [`54`](/resources/server/level#:~:text=54,SFX%2C%20in%20bytes) is now sent by the server (previously only present in the game's code)
- New comment/profile post key `15` with the Unix timestamp of when the comment was posted
- New user keys `62` and `63`:
    - `62`: privacy settings for group invites
    - `63`: currently unknown
- New user key `64` with the Unix timestamp of when you became friends with the user
- New user keys `65` through `70`:
    - `67`: total follower count
    - `68`: your personal followed amount
    - `69`: whether you follow the person whose profile you're viewing (`0` or `1`)
    - `65`, `66`, `70`: currently unknown
- New friendlist data: the friendlist now also returns the stats of each user
- New `getGJUserList20` (friendlist) types `3` and `4`:
    - `3`: the user objects of the people you follow
    - `4`: the user objects of the people you have muted
- New [Account Management](/topics/account_management#changeemail-php) features include changing the primary email and managing the recovery email
- New `downloadGJLevel` segment includes death data at the end of the response
- New error responses include the title and body of an error message popup
- New in-game news: https://geometrydashfiles.b-cdn.net/news/news.dat, with https://geometrydashfiles.b-cdn.net/news/news_version.txt
- 52 new endpoints:
    - Sound packs: `getGJEditorSounds`, `uploadGJEditorSound`, `downloadGJEditorSound`, `deleteGJEditorSound`, `updateGJSoundDesc`. Editor sound packs reuse the level list structure with a few new keys.
    - Custom platformer controls: `uploadGJLevelControls`, `getGJLevelControls`, `deleteGJLevelControls`
    - Death markers: `getGJDeathData`, `uploadGJDeathData`
    - Improved messaging system: `getGJThreads`, `getGJThreadMessages`, `getGJThreadMembers`, `getGJThreadInvites`, `sendGJThreadMessage`, `updateGJThread`, `searchGJThreadMessages`
    - Notification system: `claimGJNotificationReward`, `getGJNotifications`, `muteGJUser`
    - Content reporting: `reportGJContent`, a new system covering levels, lists, sound packs, users, threads, comments, messages and friend requests
    - Server-side follow system: `followGJUser`, `unfollowGJUser`, `getGJFollowing`, `syncGJFollowing`
    - Song usage statistics: `getGJSongUsage`
    - Global user search in the submenus of your user profile: `getGJUserSearch`
    - Total size of audio assets in the editor: `getGJAudioFilesize`
    - Content status: `getGJContentStatus`
    - Registration session token: `openedRegister` returns an `rsession` token used with `registerGJAccount`
    - 22 moderation endpoints: `adminGetUserHistory`, `adminGetReportedContent`, `adminClearReportedContent`, `adminGetReportQueue`, `adminGetAbuseInfo`, `adminGetAccountReview`, `adminThreadAction`, `adminDeleteUserComments`, `adminCommentBan`, `adminUploadBan`, `adminMessageBan`, `adminFreezeAccount`, `adminTrendingBan`, `adminNameLock`, `adminCommentUnban`, `adminUploadUnban`, `adminCloseCase`, `adminMessageUnban`, `adminUnfreezeAccount`, `adminTrendingUnban`, `adminNameUnlock`, `deleteGJComments`, `muteGJUser`

## 2.2082

- `binaryVersion`: `48`
- New client level key: [`k125`](/resources/client/level#:~:text=k125,disable) - Click Between Steps override

## 2.208, 2.2081

- `binaryVersion`: `46` (2.208), `47` (2.2081)
- New getGJScores20 parameter: [`stat`](/endpoints/users/getGJScores20#:~:text=stat,Default%3A%200.) which orders the requested leaderboard by a statistic
- New updateGJAccSettings20 params: [`instagram`, `tiktok`, `discord`, `custom`](/endpoints/accounts/updateGJAccSettings20#:~:text=instagram,time%20authentication%20token) and the corresponding user keys [58-61](/resources/server/user#:~:text=58*,time%20authentication%20token)
- User key `51` (glow color) is now always included in responses
- New getGJGauntlets21 param: [`vkey`](/endpoints/levels/getGJGauntlets21#:~:text=vkey,which%20is%202.2080\)) hardcoded to `binaryVersion`
- New [getGJLevelScores211](/endpoints/levels/getGJLevelScores211#:~:text=s11,The%20level%20version) and [getGJLevelScoresPlat](/endpoints/levels/getGJLevelScoresPlat#:~:text=s11,The%20level%20version) params: `s11`-`s20`
- The [Level Leaderboard CHK](topics/encryption/chk#level-leaderboard) is now more secure ✨ - jumps were removed, best attempt info was added
- `time` param in getGJLevelScores is now sent for classic levels too, not just platformer ones
- New client level keys: [`k115`-`k124`](/resources/client/level#:~:text=k115,were%20successfully%20saved)
- New gauntlets ([55-60](/resources/server/gauntlet#:~:text=Cosmos-,55,Love,-Trivia))
- New song type `2`: CHOMPO
- New game variables ([176-181](/resources/client/gamesave/gv#:~:text=gv_0176,Trace%20Arrows%20\(editor\)))
- The `Cookie: gd=1` header is not sent in requests anymore, it was probably replaced by the new [`dvs`](/endpoints/generic#:~:text=dvs,8%20for%20macOS) parameter that's common for almost all endpoints
