# alysonhurt.com
Personal portfolio site

--------

## Local Development

Run this in the terminal:

```
bundle exec jekyll serve
```

Load this in the browser: http://localhost:4000

## Installation

Install [Homebrew](https://brew.sh/):

```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

Update Ruby:
```
brew install ruby
```

Modify [PATH variable](https://jekyllrb.com/docs/troubleshooting/):

```
export PATH=/usr/local/bin:$PATH
```
```
launchctl setenv PATH "/usr/local/bin:$PATH"
```

Install Jekyll:

```
gem install jekyll
```

Ruby gem for a Jekyll LESS converter:

```
gem install libv8
gem install therubyracer
gem install jekyll-less
```

However, jekyll-less isn't [whitelisted](https://help.github.com/articles/configuring-jekyll-plugins/) for use with Github Pages, so we'll have to make a workaround to ensure that prerendered `.less` -> `.css` files are committed to the repo in the right place. Add this alias to `~/.bash_profile`:

```
alias jkcss="cp _site/assets/*.css assets/"
```

(I also saw this post with a workaround to [automate this process](http://www.mikeniebling.com/Setting-Up-Jekyll-With-LESS/) but it sounded more cumbersome than I really wanted to bother with.)

## Documentation

* [Jekyll Quick Start Guide](https://jekyllrb.com/docs/quickstart/)
* [jekyll-less](https://github.com/zroger/jekyll-less)
