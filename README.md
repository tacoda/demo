# Demo

_Demo_ is a CLI tool for demonstration purposes to learn about the composer/packagist system.

## Installation

```shell
composer global require tacoda/demo
```

Make sure the `~/.composer/vendor/bin` directory is in your system's `PATH`.

### Show me how

If it's not already there, add the following line to your Bash configuration file (usually `~/.bash_profile`, `~/.bashrc`, `~/.zshrc`, etc.):

```shell
export PATH=~/.composer/vendor/bin:$PATH
```

If the file doesn't exist, create it.

Run the following command on the file you've just updated for the change to take effect:

```shell
source ~/.bash_profile
```

## Use

All you need to do is call the `play` command to start the game:

```shell
demo play
```

## Update

```shell
composer global update tacoda/demo
```

## Delete

```shell
composer global remove tacoda/demo
```

## Development

Development tasks use `make`.

**Install dependencies:**

```shell
make install
```

**Run tests:**

```shell
make test
```

**Run via `make`:**

```shell
make run
```

**Run directly to pass CLI arguments:**

```shell
./bin/demo play
```
