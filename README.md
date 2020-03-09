# Türkçe Git Komutları  - Beginner
[![MyAdress](https://github.com/kmrtylmz/Testing/blob/master/images/trees.png)](https://kmrtylmz.com/)

## Komutlar



| Komutlar | Açıklamalar |
|:--------------------|:------------|
| `$ git init` | Localde .git reposu oluşturmak için |
| `$ git --version` | git versionunu gösterir |
| `$ git config --global user.name "Mert Yılmaz"` | global olarak kullanıcı adı atanır |
| `$ git config --global user.email "k.mrtylmz2@gmail.com"` | global olarak email atanır |
| `$ git config -l` | global ayarları listeler |
| `$ git clone [https://github.com/kmrtylmz/gitcommandturkish.git]` | remotedaki repoyu locale çeker |
| `$ git remote add origin HTTP_URL` | uzak sunucu adresi tanımlanır |
| `$ git remote` | uzaktaki sunucuları listeler |
| `$ git checkout` | geçerli branchi döndürür |
| `$ git pull` | uzaktaki değişiklikleri geçerli branche [default master] çeker otomatik merge eder |
| `$ git pull origin [branch adi]` | branch adindaki değişiklikleri çeker |
| `$ git status` | dosyalar üzerindeki değişiklikleri kontrol eder |
| `$ git checkout --filename` | dosya üzerindeki değişiklikleri add işleminden önce siler |
| `$ git add * veya . ` | tüm dosyaları ekler [stage durumu] |
| `$ git add -f .htaccess` | eklenmeyen dosyaları forcela yükleme |
| `$ git commit -m "First Commit Message"` | localdeki headera ekleme yapar locale kayıt |
| `$ git push -u origin master` | localdeki commiti istenilen branche ekler |
| `$ git branch ` | branchleri listeler geçerli branch * la gösterilir |
| `$ git branch -a` | local ve remote branchleri listeler |
| `$ git branch [branch adi]` | branch oluşturur |
| `$ git checkout -b feature_x` | feature_x adı altında bir dal olusturup ona gecer |
| `$ git checkout feature_x ` | feature_x branche geçmek için [master veya farklı dallar] |
| `$ git branch -m [eski branch adi] [yeni branch adi] ` | branchin ismini degistirir  |
| `$ git fetch origin ` |	 tanımlanan origindeki branchleri tamamını geçici kaydeder merge etmez |
| `$ git merge [branch adi] ` |	 aktif branche farklı bir branchi merge etmek için |
| `$ git merge [kaynak branch] [hedef branch]` | bir branchi hedef branche merge etmek için |
| `$ git branch -d feature_x ` | feature_x branchini localden siler  |
| `$ git diff [kaynak branch] [hedef branch]` | iki branch arasındaki değişiklikleri görüntüleme  |
| `$ git checkout -- [file-name.txt]	` |  file-name adındaki dosyadaki değişiklikleri sil |
| `$ git push origin [branch adi]` | remotedaki branchlara göndermek için |
| `$ git push -u origin [branch adi]` | remotedaki branchlara değişiklikler gider ve push derken branchin hatırlanılması istenir |
| `$ git push ` | remoteda en son hatırlanılan branche  değişiklikler gider |
| `$ git push origin --delete [branch adi]` | remotedaki branchi silmek için |
| `$ git log ` | loglarını görmek için  |
| `$ git log --summary` | logları detaylı görmek için  |
| `$ git log --oneline` | logları kısaca görmek için  |
| `$ git checkout --File_name` | dosyadaki değişikleri bir önceki commite ceker |
| `$ git checkout COMMIT_ID ` | Id belirtilen commite geri dönüş yapar |
| `$ git rm --cached .idea` | staging area dan index durumunu kaldırır - git add tersi |
| `$ git rm --r .idea` |  .idea vb dizini siler remote 'a yansıması için push edilmesi gerekir  |
| `$ git tag -a v0.1 46b5d25 -m "Message"` | son commit Idsinin 7 hanesiyle release oluşturulur |
| `$ git push origin --tags` | remote repository'e tag eklenir |
| `$ git stash save "mesaj" ` | geçici kayıt altına alır repoyu commit atılmadan önceki hale getirir  |
| `$ git stash list` | geçici kayıtları lister |
| `$ git stash drop stashindexi[0-1 vb] ` | geçici kayıtlardan indeksi siler  index yoksa son kayıtı siler|
| `$ git stash pop stashindexi[0-1 vb] ` | geçici kayıtlardan indeksi olanı getirir default olarak son kayıt - daha cok pull dan sonra kullanılır |
| `$ git reset commitId  --hard ` |  istenilen [commitid] commite geri dönüş yaparken bu committen sonrakileride siler |
| `$ git reset commitId  --soft ` |  istenilen [commitid]  commite geri dönüş yaparken bu committen sonrakileri commit olarak tekrar gönderilmesini ister |
| `$ git revert commitId  ` |  committeki değişiklikler geri alınır tersine işlem ancak loglarda commit ıdsi görüntülenir |
| `$ git commit --amend  -m "mesaj" ` |  son commit mesajı değiştirilir ayrıca unutulmuş commitler son commite eklenebilir |
| `$ git rebase branchadi ` |  iki farklı branchde değişiklikler varsa iki tarafı birbirine merge eder cakısmalar için --continue --skip parametreleri aldırılabilir |
| `$ git rebase --abort ` |  rebase durumunu geri alır |










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
