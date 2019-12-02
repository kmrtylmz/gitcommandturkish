# Türkçe Git Komutları
[![MyAdress](https://github.com/kmrtylmz/Testing/blob/master/images/trees.png)](https://kmrtylmz.com/)

## Komutlar



| `Komutlar` | `Açıklamalar` |
|:--------------------|:------------|
| `$ git init` | `Localde .git reposu oluşturmak için` |
| `$ git config --global user.name "Mert Yılmaz"` | `global olarak kullanıcı adı atanır` |
| `$ git config --global user.email "k.mrtylmz2@gmail.com"` | `global olarak email atanır` |
| `$ git config -l` | `global ayarları listeler` |
| `$ git remote add origin HTTP_URL` | `uzak sunucu adresi tanımlanır` |
| `$ git remote` | `uzaktaki sunucuları listeler` |
| `$ git checkout` | `geçerli branchi döndürür` |
| `$ git pull` | `uzaktaki dosyaları geçerli branche [default master] çeker` |
| `$ git status` | `dosyalar üzerindeki değişiklikleri kontrol eder` |
| `$ git add *` | `tüm dosyaları ekler` |
| `$ git add -f .htaccess` | `eklenmeyen dosyaları forcela yükleme` |
| `$ git commit -m "First Commit Message"` | `localdeki headera ekleme yapar locale kayıt` |
| `$ git push -u origin master` | `localdeki commiti istenilen branche ekler` |
| `$ git branch ` | `branchleri listeler` |
| `$ git checkout -b feature_x` | `feature_x adı altında bir dal olusturup ona gecer` |
| `$ git checkout feature_x ` | `feature_x branche geçmek için [master veya farklı dallar]` |
| `$ git branch -d feature_x ` | `feature_x branchini siler ` |
| `$ git push origin <dal>` | `remotedaki branchlara göndermek için` |
| `$ git log ` | `commitlerin loglarını görmek için ` |
| `$ git checkout --File_name` | ` dosyadaki değişikleri bir önceki commite ceker` |
| `$ git checkout COMMIT_ID ` | `Id belirtilen commite geri dönüş yapar` |
| `$ git rm --cached -r .idea` | `remote ' daki dosyayı silme` |
| `$ git tag -a v0.1 46b5d25 -m "Message"` | `son commit Idsinin 7 hanesiyle release oluşturulur` |
| `$ git push origin --tags` | `remote repository'e tag eklenir` |

.<br/>
.<br/>
.<br/>
..


 
[mit]: <https://github.com/kmrtylmz/Testing/blob/master/LICENSE/>


## GNUPG Doğrulanmış Komutlar

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

License
----

See [ MIT ][mit]
