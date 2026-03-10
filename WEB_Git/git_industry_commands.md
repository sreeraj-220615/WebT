# Git Industry Commands Documentation
Author: sreeraj-220615

====================================================

1. git config --global user.name
Syntax:
git config --global user.name "sreeraj-220615"

Purpose:
Sets the global Git username used for commits.

Example:
git config --global user.name "sreeraj-220615"

Screenshot:
![screenshot](screenshot1.jpg)

----------------------------------------------------

2. git config --global user.email
Syntax:
git config --global user.email "n220615@rguktn.ac.in"

Purpose:
Sets the global Git email used for commits.

Example:
git config --global user.email "n220615@rguktn.ac.in"

Screenshot:
![screenshot](screenshot2.jpg)

----------------------------------------------------

3. git config --list
Syntax:
git config --list

Purpose:
Displays all Git configuration settings.

Example:
git config --list

Screenshot:
![screenshot](screenshot3.jpg)

----------------------------------------------------

4. git config --unset
Syntax:
git config --unset <key>

Purpose:
Removes a configuration entry.

Example:
git config --global --unset user.name

Screenshot:
![screenshot](screenshot4.jpg)

----------------------------------------------------

5. git init
Syntax:
git init

Purpose:
Initializes a new Git repository.

Example:
git init

Screenshot:
![screenshot](screenshot5.jpg)

----------------------------------------------------

6. git clone
Syntax:
git clone <repository-url>

Purpose:
Copies a remote repository.

Example:
git clone https://github.com/sreeraj-220615/sample-project.git

Screenshot:
![screenshot](screenshot6.jpg)

----------------------------------------------------

7. git clone --branch
Syntax:
git clone --branch <branch-name> <repository-url>

Purpose:
Clones a specific branch.

Example:
git clone --branch main https://github.com/sreeraj-220615/sample-project.git

Screenshot:
![screenshot](screenshot7.jpg)

----------------------------------------------------

8. git clone --depth
Syntax:
git clone --depth 1 <repository-url>

Purpose:
Creates a shallow clone.

Example:
git clone --depth 1 https://github.com/sreeraj-220615/sample-project.git

Screenshot:
![screenshot](screenshot8.jpg)

----------------------------------------------------

9. git status
Syntax:
git status

Purpose:
Shows repository status.

Example:
git status

Screenshot:
![screenshot](screenshot9.jpg)

----------------------------------------------------

10. git log
Syntax:
git log

Purpose:
Shows commit history.

Example:
git log

Screenshot:
![screenshot](screenshot10.jpg)

----------------------------------------------------

11. git log --oneline
Syntax:
git log --oneline

Purpose:
Shows commit history in one line.

Example:
git log --oneline

Screenshot:
![screenshot](screenshot11.jpg)

----------------------------------------------------

12. git log --graph
Syntax:
git log --graph --oneline

Purpose:
Displays commit graph.

Example:
git log --graph --oneline

Screenshot:
![screenshot](screenshot12.jpg)

----------------------------------------------------

13. git show
Syntax:
git show HEAD

Purpose:
Displays details of the latest commit.

Example:
git show HEAD

Screenshot:
![screenshot](screenshot13.jpg)

----------------------------------------------------

14. git diff
Syntax:
git diff

Purpose:
Shows file differences.

Example:
git diff

Screenshot:
![screenshot](screenshot14.jpg)

----------------------------------------------------

15. git diff --staged
Syntax:
git diff --staged

Purpose:
Shows staged differences.

Example:
git diff --staged

Screenshot:
![screenshot](screenshot15.jpg)

----------------------------------------------------

16. git blame
Syntax:
git blame <file>

Purpose:
Shows author for each line.

Example:
git blame README.md

Screenshot:
![screenshot](screenshot16.jpg)

----------------------------------------------------

17. git reflog
Syntax:
git reflog

Purpose:
Shows reference log.

Example:
git reflog

Screenshot:
![screenshot](screenshot17.jpg)

----------------------------------------------------

18. git shortlog
Syntax:
git shortlog

Purpose:
Summarizes commits by author.

Example:
git shortlog

Screenshot:
![screenshot](screenshot18.jpg)

----------------------------------------------------

19. git add
Syntax:
git add <file>

Purpose:
Adds file to staging area.

Example:
git add file1.txt

Screenshot:
![screenshot](screenshot19.jpg)

----------------------------------------------------

20. git add .
Syntax:
git add .

Purpose:
Adds all files.

Example:
git add .

Screenshot:
![screenshot](screenshot20.jpg)

----------------------------------------------------

21. git add -A
Syntax:
git add -A

Purpose:
Adds all changes.

Example:
git add -A

Screenshot:
![screenshot](screenshot21.jpg)

----------------------------------------------------

22. git restore
Syntax:
git restore <file>

Purpose:
Restores file changes.

Example:
git restore file1.txt

Screenshot:
![screenshot](screenshot22.jpg)

----------------------------------------------------

23. git restore --staged
Syntax:
git restore --staged <file>

Purpose:
Unstages a file.

Example:
git restore --staged file1.txt

Screenshot:
![screenshot](screenshot23.jpg)

----------------------------------------------------

24. git rm
Syntax:
git rm <file>

Purpose:
Deletes file.

Example:
git rm oldfile.txt

Screenshot:
![screenshot](screenshot24.jpg)

----------------------------------------------------

25. git mv
Syntax:
git mv old.txt new.txt

Purpose:
Renames file.

Example:
git mv old.txt new.txt

Screenshot:
![screenshot](screenshot25.jpg)

----------------------------------------------------

26. git commit
Syntax:
git commit

Purpose:
Records changes.

Example:
git commit

Screenshot:
![screenshot](screenshot26.jpg)

----------------------------------------------------

27. git commit -m
Syntax:
git commit -m "message"

Purpose:
Commit with message.

Example:
git commit -m "Initial commit"

Screenshot:
![screenshot](screenshot27.jpg)

----------------------------------------------------

28. git commit --amend
Syntax:
git commit --amend

Purpose:
Modify last commit.

Example:
git commit --amend

Screenshot:
![screenshot](screenshot28.jpg)

----------------------------------------------------

29. git branch
Example:
git branch

Screenshot:
![screenshot](screenshot29.jpg)

----------------------------------------------------

30. git branch -a
Example:
git branch -a

Screenshot:
![screenshot](screenshot30.jpg)

----------------------------------------------------

31. git branch -d
Example:
git branch -d feature

Screenshot:
![screenshot](screenshot31.jpg)

----------------------------------------------------

32. git branch -D
Example:
git branch -D feature

Screenshot:
![screenshot](screenshot32.jpg)

----------------------------------------------------

33. git checkout
Example:
git checkout main

Screenshot:
![screenshot](screenshot33.jpg)

----------------------------------------------------

34. git checkout -b
Example:
git checkout -b new-feature

Screenshot:
![screenshot](screenshot34.jpg)

----------------------------------------------------

35. git switch
Example:
git switch main

Screenshot:
![screenshot](screenshot35.jpg)

----------------------------------------------------

36. git switch -c
Example:
git switch -c dev

Screenshot:
![screenshot](screenshot36.jpg)

----------------------------------------------------

37. git merge
Example:
git merge feature

Screenshot:
![screenshot](screenshot37.jpg)

----------------------------------------------------

38. git merge --no-ff
Example:
git merge --no-ff feature

Screenshot:
![screenshot](screenshot38.jpg)

----------------------------------------------------

39. git remote
Example:
git remote

Screenshot:
![screenshot](screenshot39.jpg)

----------------------------------------------------

40. git remote -v
Example:
git remote -v

Screenshot:
![screenshot](screenshot40.jpg)

----------------------------------------------------

41. git remote add
Example:
git remote add origin https://github.com/sreeraj-220615/project.git

Screenshot:
![screenshot](screenshot41.jpg)

----------------------------------------------------

42. git remote remove
Example:
git remote remove origin

Screenshot:
![screenshot](screenshot42.jpg)

----------------------------------------------------

43. git fetch
Example:
git fetch

Screenshot:
![screenshot](screenshot43.jpg)

----------------------------------------------------

44. git fetch --all
Example:
git fetch --all

Screenshot:
![screenshot](screenshot44.jpg)

----------------------------------------------------

45. git pull
Example:
git pull

Screenshot:
![screenshot](screenshot45.jpg)

----------------------------------------------------

46. git pull --rebase
Example:
git pull --rebase

Screenshot:
![screenshot](screenshot46.jpg)

----------------------------------------------------

47. git push
Example:
git push

Screenshot:
![screenshot](screenshot47.jpg)

----------------------------------------------------

48. git push -u origin main
Example:
git push -u origin main

Screenshot:
![screenshot](screenshot48.jpg)

----------------------------------------------------

49. git push --force
Example:
git push --force

Screenshot:
![screenshot](screenshot49.jpg)

----------------------------------------------------

50. git stash
Example:
git stash

Screenshot:
![screenshot](screenshot50.jpg)

----------------------------------------------------

51. git stash list

Screenshot:
![screenshot](screenshot51.jpg)

----------------------------------------------------

52. git stash pop

Screenshot:
![screenshot](screenshot52.jpg)

----------------------------------------------------

53. git stash apply

Screenshot:
![screenshot](screenshot53.jpg)

----------------------------------------------------

54. git stash drop

Screenshot:
![screenshot](screenshot54.jpg)

----------------------------------------------------

55. git stash clear

Screenshot:
![screenshot](screenshot55.jpg)

----------------------------------------------------

56. git reset
Example:
git reset HEAD

Screenshot:
![screenshot](screenshot56.jpg)

----------------------------------------------------

57. git reset --soft
Example:
git reset --soft HEAD~1

Screenshot:
![screenshot](screenshot57.jpg)

----------------------------------------------------

58. git reset --mixed
Example:
git reset --mixed HEAD~1

Screenshot:
![screenshot](screenshot58.jpg)

----------------------------------------------------

59. git reset --hard
Example:
git reset --hard HEAD~1

Screenshot:
![screenshot](screenshot59.jpg)

----------------------------------------------------

60. git revert
Example:
git revert HEAD

Screenshot:
![screenshot](screenshot60.jpg)

----------------------------------------------------

61. git clean -f

Screenshot:
![screenshot](screenshot61.jpg)

----------------------------------------------------

62. git clean -fd

Screenshot:
![screenshot](screenshot62.jpg)

----------------------------------------------------

63. git rebase
Example:
git rebase main

Screenshot:
![screenshot](screenshot63.jpg)

----------------------------------------------------

64. git rebase -i

Screenshot:
![screenshot](screenshot64.jpg)

----------------------------------------------------

65. git rebase --continue

Screenshot:
![screenshot](screenshot65.jpg)

----------------------------------------------------

66. git rebase --abort

Screenshot:
![screenshot](screenshot66.jpg)

----------------------------------------------------

67. git cherry-pick
Example:
git cherry-pick commit-id

Screenshot:
![screenshot](screenshot67.jpg)

----------------------------------------------------

68. git format-patch

Screenshot:
![screenshot](screenshot68.jpg)

----------------------------------------------------

69. git apply

Screenshot:
![screenshot](screenshot69.jpg)

----------------------------------------------------

70. git tag
Example:
git tag

Screenshot:
![screenshot](screenshot70.jpg)

----------------------------------------------------

71. git tag -a
Example:
git tag -a v1.0 -m "version 1.0"

Screenshot:
![screenshot](screenshot71.jpg)

----------------------------------------------------

72. git tag -d

Screenshot:
![screenshot](screenshot72.jpg)

----------------------------------------------------

73. git push --tags

Screenshot:
![screenshot](screenshot73.jpg)

----------------------------------------------------

74. git submodule add

Screenshot:
![screenshot](screenshot74.jpg)

----------------------------------------------------

75. git bisect

Screenshot:
![screenshot](screenshot75.jpg)

----------------------------------------------------