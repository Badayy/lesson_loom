REPOSITORY FLOW for pushing changes:

step 1:
-  git status

step 2:
- git add .

step 3:
- git commit -m "sample message"

step 4:
- git push origin branch_name


REPOSITORY FLOW for pulling changes:
- git pull origin branch_name

#optional - if has changes and need to pull other dev chanages
- git stash

- git pull origin branch_name

- git stash pop
