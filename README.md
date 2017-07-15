# getCached($url, $expires = 3600);

Saves the result of a `f::read()` request in Kirby's local cache folder. If the cache is not expired, subsequent requests will be served from the local filesystem.

- **$url** (string)  
  The path for the request 
- **$expires** (int)  
  Number of seconds until the cache expires (optional; defaults to 1 hour)

## Installation

### 1. Clone or download

1. Clone or download this repository.
2. Unzip the archive if needed and rename the folder to `getcached`.

Make sure that the plugin folder structure looks like this:

```
site/plugins/getcached/
```

### 2. Git Submodule

If you know your way around Git, you can download this plugin as a submodule:

```
$ cd path/to/kirby
$ git submodule add https://github.com/samnabi/getcached site/plugins/getcached
```

## Usage

Use `getCached()` as a drop-in replacement for Kirby's [`f::read()`](https://getkirby.com/docs/toolkit/api/f/read) or PHP's [`file_get_contents()`](http://php.net/manual/en/function.file-get-contents.php).