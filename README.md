# TeamBravoLogin

Team Bravo login and signin page repository.

## Link to Lucid blog

https://lucid.blog/dkehinde93/post/hng-internship-team-bravo-eef

## Link to Live app

http://teambravo.afroblogit.com/

# Contributions

_The images used are not from this repository, it is there to make you understand how to go about contributing_

## Fork the repository

go to https://github.com/RaphaelNagato/TeamBravoLogin , fork the repository by clicking on the _fork_ button at the top of the page,

![ScreenShot](https://res.cloudinary.com/raphaelnagato/image/upload/v1567259047/gitapad2.png)

## Clone the repository

go to your forked repository on your Github profile and copy the URL to your forked repository, from _clone or download_ button

![ScreenShot](https://res.cloudinary.com/raphaelnagato/image/upload/v1567259048/giftapad_3.png)

then go to your terminal on your computer and type

`git clone "url you just copied"` e.g `git clone https://github.com/your-username/TeamBravoLogin.git` .

## Create a branch

on your terminal, type `cd TeamBravoLogin` , then create a new branch by using `git checkout` command, `git checkout -b <name-of-new-branch>` , e.g `git checkout -b newBranch`

## Make necessary changes

Make your changes to the repository on your system and when you are through,

Go to the terminal and enter `git status` command, you should see the unstaged files highlighted in red.

stage the changed file by using the command `git add .` e.g just `git add index.html`

(using `git status` command again, will show the files changed highlighted in green)

commit the files using `git commit -m 'your-commit-message'` e.g `git commit -m 'add-index.html'`

## Push your changes to github

push your changes to github using `git push` command

i.e `git push origin <your-branch-name>` replacing <your-branch-name> with the name of the branch you created earlier, e.g `git push origin newBranch`

## Submit changes for review

If you go to your repository on github, you should see compare & pull request button, click on it

![ScreenShot](https://slack-imgs.com/?c=1&o1=ro&url=https%3A%2F%2Fhisham.hm%2Fimg%2Fposts%2Fgithub-comparepr.png)

Now submit the pull request by clicking on _create pull request button_ , remember to add a screenshot of the `team.html` page

![ScreenShot](https://slack-imgs.com/?c=1&o1=ro&url=https%3A%2F%2Fraw.githubusercontent.com%2FRaphaelNagato%2Ffirst-contributions%2Fmaster%2Fassets%2Fsubmit-pull-request.png)

Soon, your changes will be merged.

![ScreenShot](https://res.cloudinary.com/raphaelnagato/image/upload/v1567261134/giftapad5.png)

_CONGRATS ON YOUR CONTRIBUTION!!!_

## What next?

# Keep forked repository in sync

_The images used are not from this repository, it is there to make you understand how to go about updating your repo_

_After Forking and cloning your repository, you start contributing to the main repository and after a while, you notice that your forked repository and the upstream repository are not in sync anymore, usually noticed when your branch have conflicts with the main branch. This guide will make you get the current version of the upstream repository._

## Add the Upstream

The original repository is mostly called `upstream` . In our case, that would be `https://github.com/giftapad/main_files.git` , `cd` into your forked repository, you should preferably be on the `master` branch. To add `upstream` you use the command;

`git remote add upstream git://github.com/RaphaelNagato/TeamBravoLogin.git`

Using the `git remote -v` command after, you should see the following;

![ScreenShot](https://res.cloudinary.com/raphaelnagato/image/upload/v1567518500/clodinary_upstream.png)

if you made any mistakes in the URL when adding the upstream, you could always use `git remote remove upstream` , and repeat the process again .

## Fetch and Merge upstream with forked repository

Now that we have both URLs, we can now use the command `git fetch upstream` to fetch all the changes from the upstream and then we merge the changes using:

`git merge upstream/master master`.

you can do all this with just `git pull` i.e `git pull upstream master`

## Keeping remote origin up to date

After the previous step, if you type the command `git status` , you should get a message like;

![ScreenShot](https://res.cloudinary.com/raphaelnagato/image/upload/v1567519673/behind_giftapad.png)

This is because, you have only updated your local repository, to update your remote repository, that is the one on GitHub,you will have to use `git push` command i.e `git push -u origin master`.

refreshing your remote repository on GitHub should show that your `branch` is even with `RaphaelNagato:master`.
