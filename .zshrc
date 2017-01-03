# If you come from bash you might have to change your $PATH.
# export PATH=$HOME/bin:/usr/local/bin:$PATH
# export PATH=$HOME/bin:/usr/local/bin/bash:$PATH

# Path to your oh-my-zsh installation.
export ZSH=/Users/jasonkwh/.oh-my-zsh

# Set name of the theme to load. Optionally, if you set this to "random"
# it'll load a random theme each time that oh-my-zsh is loaded.
# See https://github.com/robbyrussell/oh-my-zsh/wiki/Themes
ZSH_THEME="agnoster"

# Uncomment the following line to use case-sensitive completion.
# CASE_SENSITIVE="true"

# Uncomment the following line to use hyphen-insensitive completion. Case
# sensitive completion must be off. _ and - will be interchangeable.
# HYPHEN_INSENSITIVE="true"

# Uncomment the following line to disable bi-weekly auto-update checks.
# DISABLE_AUTO_UPDATE="true"

# Uncomment the following line to change how often to auto-update (in days).
# export UPDATE_ZSH_DAYS=13

# Uncomment the following line to disable colors in ls.
# DISABLE_LS_COLORS="true"

# Uncomment the following line to disable auto-setting terminal title.
# DISABLE_AUTO_TITLE="true"

# Uncomment the following line to enable command auto-correction.
# ENABLE_CORRECTION="true"

# Uncomment the following line to display red dots whilst waiting for completion.
# COMPLETION_WAITING_DOTS="true"

# Uncomment the following line if you want to disable marking untracked files
# under VCS as dirty. This makes repository status check for large repositories
# much, much faster.
# DISABLE_UNTRACKED_FILES_DIRTY="true"

# Uncomment the following line if you want to change the command execution time
# stamp shown in the history command output.
# The optional three formats: "mm/dd/yyyy"|"dd.mm.yyyy"|"yyyy-mm-dd"
# HIST_STAMPS="mm/dd/yyyy"

# Would you like to use another custom folder than $ZSH/custom?
# ZSH_CUSTOM=/path/to/new-custom-folder

# Which plugins would you like to load? (plugins can be found in ~/.oh-my-zsh/plugins/*)
# Custom plugins may be added to ~/.oh-my-zsh/custom/plugins/
# Example format: plugins=(rails git textmate ruby lighthouse)
# Add wisely, as too many plugins slow down shell startup.
plugins=(git)

source $ZSH/oh-my-zsh.sh

# User configuration

# export MANPATH="/usr/local/man:$MANPATH"

# You may need to manually set your language environment
# export LANG=en_US.UTF-8

# Preferred editor for local and remote sessions
# if [[ -n $SSH_CONNECTION ]]; then
#   export EDITOR='vim'
# else
#   export EDITOR='mvim'
# fi

# Compilation flags
# export ARCHFLAGS="-arch x86_64"

# ssh
# export SSH_KEY_PATH="~/.ssh/dsa_id"

# Set personal aliases, overriding those provided by oh-my-zsh libs,
# plugins, and themes. Aliases can be placed here, though oh-my-zsh
# users are encouraged to define aliases within the ZSH_CUSTOM folder.
# For a full list of active aliases, run `alias`.
#
# Example aliases
# alias zshconfig="mate ~/.zshrc"
# alias ohmyzsh="mate ~/.oh-my-zsh"
alias -s js=brackets
alias -s css=brackets
alias -s html=brackets
alias -s md=brackets
alias -s gz='tar -xzvf'
alias -s tgz='tar -xzvf'
alias -s zip='unzip'
alias -s bz2='tar -xjvf'
DEFAULT_USER='jasonkwh'
plugins=(zsh-autosuggestions)

source /usr/local/share/zsh-syntax-highlighting/zsh-syntax-highlighting.zsh

# mount the android file image
function mountAndroid { hdiutil attach ~/android.dmg.sparseimage -mountpoint /Volumes/android; }

# unmount the android file image
function umountAndroid() { hdiutil detach /Volumes/android; }

# connect to smfos aliyun server (47.90.81.198)
function smfosConnect() { ssh root@47.90.81.198; }

# upload smfos themes file to aliyun server
function smfosUpload() { scp -r ~/Desktop/sankofa-family/wp-content/themes/sankofafamily/$1 root@47.90.81.198:/data/wwwroot/default/wp-content/themes/sankofafamily/; }

# upload smfos root file to aliyun server
function smfosUploadRoot() { scp -r ~/Desktop/sankofa-family/$1 root@47.90.81.198:/data/wwwroot/default/; }

# upload smfos image file to aliyun server
function smfosUploadImage() { scp -r ~/Desktop/sankofa-family/images/$1 root@47.90.81.198:/data/wwwroot/default/images/; }

# upload smfos css file to aliyun server
function smfosUploadCSS() { scp -r ~/Desktop/sankofa-family/css/$1 root@47.90.81.198:/data/wwwroot/default/css/; }

# upload smfos js file to aliyun server
function smfosUploadJS() { scp -r ~/Desktop/sankofa-family/js/$1 root@47.90.81.198:/data/wwwroot/default/js/; }

# update rsa passphase
function smfosSSH() { ssh-add -K ~/.ssh/id_rsa; }