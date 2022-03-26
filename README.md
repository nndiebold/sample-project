# sample-project
A simple code repository for getting started with git

---
- [Get Started with Git](#get-started-with-git)
- [Clone via SSH](#clone-a-repository-via-ssh)
- [Create a Working Branch](#create-your-own-working-branch)
- [Write Descriptive Commits](#write-descriptive-commit-messages)
- [Keep Your Working Branch Clean](#keep-your-working-branch-clean)
- [Share Your Progress](#share-your-progress)
---

## Instructions

### Get started with git
1. Download **git**:  https://git-scm.com/downloads
2. Make an account on GitHub:  https://github.com/signup

### Clone a repository via SSH
1. Set up **SSH** access, using **git bash** that comes with **git**.  [Follow this guide for GitHub](https://docs.github.com/en/authentication/connecting-to-github-with-ssh/generating-a-new-ssh-key-and-adding-it-to-the-ssh-agent)
2. Go to the code repository at https://github.com/nndiebold/sample-project
3. Under the green Code button, click **SSH**
4. Copy the **SSH** url `git@github.com:nndiebold/sample-project.git`
5. In **git bash**, type `git clone git@github.com:nndiebold/sample-project.git`
6. Change into that newly created directory with `cd sample-project`
7. Tell the git repository who you are:
    - `git config user.email "you@example.com"`
    - `git config user.name "Your Name"`

### Create your own working branch
The main branch is only for approved project code. After cloning a repository, you should follow these steps to create your own personal working branch:  
1. In **git bash**, navigate into your project directory `cd path/to/sample-project`
2. Type `git status` to check for any uncommitted changes
3. If you have any untracked changes, either:
    - Commit them. See [Write Descriptive Commit Messages](#write-descriptive-commit-messages)
    - Stash them for later, without committing them. See [Keep your working branch clean](#keep-your-working-branch-clean)
4. If all is well, switch to a new branch with `git checkout -b new-branch-name`
    - You may find it useful to make a new branch for each major feature
    - If you want to switch to an existing branch, you can do `git checkout other-branch-name`
    - To see all available branches, do `git branch -a`

### Write descriptive commit messages
Whenever you make changes that you want to save, you should commit them.  Commits are like incremental save points that contain several related changes.  Avoid adding too many changes to a single commit, or else your commit messages will be difficult to write. It may be better to think about what your commit messages will be BEFORE you start making changes.

To commit your changes, do the following:  
1. Check your current list of changes with `git status`
2. Choose which changes to commit with `git add filename.ext`
    - or track all the changes with `git add .` 
    - or untrack a tracked change with `git rm filename.ext`
    - or choose which changes to discard with `git restore filename.ext`
3. Commit your changes with `git commit -m "feat(scope): changes made"`
    - The commit message should be short yet descriptive
        - `docs: add example usage of FeatureName`
        - `style: change the color scheme to use blue 0000ff`
        - `feat: implement sortByTeam`
        - `fix: typo in homepage url`
        - `chore: remove unused files`
    - Add a scope to specify which part of the project your changes affect
        - `docs(spec): update to match changes from #54` (a specification changed due to #54 in the issue tracker)
        - `style(a11y): increase contrast between text and background` (a11y means accessibility)
        - `feat(mobile): add mobile device support`
        - `fix(#23): check for NaN scores before comparing` (closes #23 in the issue tracker)
    - See [Conventional Commits](https://www.conventionalcommits.org/en/v1.0.0/#summary) for more.

### Keep your working branch clean
Always save your work before you update your branch, change branches, or take a break from programming. If your work is not ready to be committed, you can stash your changes for later.  
1. Type `git status` to check for any untracked or uncommitted changes
2. If there are changes you want to commit, do so. See [Write Descriptive Commit Messages](#write-descriptive-commit-messages)
3. For any changes you do not wish to commit, you can temporarily save them for later.
    1. Type `git stash push -u -m "WIP: feature-name"` to save the changes for later
    2. When you are ready to continue working, 
        1. If you do not remember your stashed changes, type `git stash list` to get a list of stashes with numbers (the most recent will be at position 0)
        2. To peek at what your stashed changes were for the most recent stash, type `git stash show 0`
        3. To restore your changes from the most recent stash, type `git stash apply 0`
        4. If you no longer need to keep a reference to the most recent stash, remove it with `git stash drop 0`

### Share your progress
When you have committed changes, share them with the rest of the team. Always *fetch* and *merge* before you *push*
1. First, make sure your working branch is clean. See [Keep your working branch clean](#keep-your-working-branch-clean)
2. Now you can fetch the most recent changes. 
    - Type `git fetch --verbose` to get all the updates
    - Type `git fetch --verbose origin main` to get all the updates for just the main branch
    - Type `git fetch --verbose origin branch-name` to get only the updates for that branch
3. Merge the fetched changes into your current branch.
    - Type `git merge main` to get your current branch up-to-date with the fetched main branch
    - Type `git merge other-branch-name` to merge a different branch into your current branch
    - Type `git merge origin/branch-name` to merge a branch from the origin repo into your current branch
4. If there are conflicts, compare the changes and resolve them. Then start again from Step 1.
5. If all is good and there are no more updates or conflicts, you can share with `git push origin branch-name`
6. If you believe your changes should be put on the main branch, submit a new [Pull Request](https://github.com/nndiebold/sample-project/pulls). Your pull request should describe your changes and why you believe they belong on the main branch.

