# um-libraries-new-books

This is a repository for setting up the new items pages. 

To create the pages you'll need to clone the repository and then run:

```bash
git submodule update --init
``` 

If one of the other repos has been updated you'll need to run this on the server to 
pull in the changes:

```bash
git submodule foreach git pull origin master
```

That will pull in the submodules. 

Then run:

```
sh new_books.sh
```



This project combines the functionality of these different GitHub repos:

* [pnxplease](https://github.com/UMiamiLibraries/pnxplease)
* [alma-rss-to-html](https://github.com/UMiamiLibraries/alma-rss-to-html)
* [um-book-cover](https://github.com/UMiamiLibraries/um-book-cover)
