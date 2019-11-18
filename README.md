# Testing
[![MyAdress](https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcR2LwDvH38_0DAhLsHSGydv8_pgWXhR1yCZ__W5TMrxBLZI7ib6)](https://kmrtylmz.com/)

## Steps 

```sh
$ cd test
$ git config --global user.name "Mert Yılmaz"
$ git config --global user.email "k.mrtylmz2@gmail.com"
$ git config -l
$ git init // Local git reposu oluşturmak için .git
$ git remote add origin HTTPS_URL 
$ git remote -v 
$ git status
$ git add *
$ git add -f .htaccess  // Htaccessi eklemek için. -Force 
$ git status 
$ git checkout
$ git commit -m "First Commit Message" 
$ git push -u origin master 

$ git tag -a v0.1 46b5d255dd9c901801eead7c5f8e9c3a4b3d34f4

```
[mit]: <https://github.com/kmrtylmz/Testing/blob/master/LICENSE/>


## GNUPG Steps

on GitHub so other people can trust that the changes come from a trusted source 

```sh
$ gpg --full-generate-key 
$ gpg --list-secret-keys --keyid-format LONG  **// check list**

/Users/hubot/.gnupg/secring.gpg
------------------------------------
sec   4096R/3AA5C34371567BD2 2016-03-10 [expires: 2017-03-10]
uid                          Hubot 
ssb   4096R/42B317FD4BA89E7A 2016-03-10

${3AA5C34371567BD2} **// GPG key ID**

$ gpg --armor --export  **GPG_KEY_ID [ASCI]**

Copy your GPG key, beginning with **-----BEGIN PGP PUBLIC KEY BLOCK-----**
 and ending with **-----END PGP PUBLIC KEY BLOCK-----**.

> **Add on Github** -> Settings -> SSH & GPG -> New GPG key -> Pasting 

$ git config --global user.signingkey GPG_KEY_ID  **// Telling Git your signed key

$ git commit -S -m your commit message# Creates a signed commit   **// Add -S flag** 

$ git tag -s mytag# Creates a signed tag 

$ git tag -v mytag# Verifies the signed tag

$ git push  **// Pushes your local commits to the remote repository **  



```
- [x] Verified Commits

License
----

See [ MIT ][mit]
