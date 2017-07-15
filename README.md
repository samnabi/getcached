# f::readCached($url, $time = 3600);

Saves the result of a `f::read()` call in a local cache. If the cache is less than `$time` seconds old, subsequent requests will be served from the local file cache.

- $url (string)  
  The path for the request 
- $time (int) 
  Number of seconds to keep the cache valid (optional; defaults to 1 hour)

## Installation

### 1. Clone or download

1. Clone or download this repository.
2. Unzip the archive if needed and rename the folder to `file-read-cached`.

Make sure that the plugin folder structure looks like this:

```
site/plugins/file-read-cached/
```

### 2. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/samnabi/file-read-cached site/plugins/file-read-cached
```

## Usage

Use `f::readCached()` as a drop-in replacement for Kirby's [`f::read()`](https://getkirby.com/docs/toolkit/api/f/read) or PHP's [`file_get_contents()`](http://php.net/manual/en/function.file-get-contents.php).