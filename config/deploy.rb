# config valid only for current version of Capistrano
lock "3.9.0"

set :application, "Doe-Anderson-Snippets"
set :repo_url, "git@github.com:doeanderson/snippets"

set :deploy_to, "/opt/sites/snippets.doe1915.com"

set :keep_releases, 5

# after :deploy, 'shared_files:move'
# after 'shared_files:move', 'artisan:cache'
# after 'artisan:cache', 'permissions:views'
# after 'permissions:views', 'front_end:move_built_files'

# set :linked_dirs, %w{storage bootstrap}
# after :deploy, 'composer:move'
# after 'composer:move', 'composer:install'

# Default branch is :master
# ask :branch, `git rev-parse --abbrev-ref HEAD`.chomp

# Default deploy_to directory is /var/www/my_app_name
# set :deploy_to, "/var/www/my_app_name"

# Default value for :format is :airbrussh.
# set :format, :airbrussh

# You can configure the Airbrussh format using :format_options.
# These are the defaults.
# set :format_options, command_output: true, log_file: "log/capistrano.log", color: :auto, truncate: :auto

# Default value for :pty is false
# set :pty, true

# Default value for :linked_files is []
# append :linked_files, "config/database.yml", "config/secrets.yml"

# Default value for linked_dirs is []
# append :linked_dirs, "log", "tmp/pids", "tmp/cache", "tmp/sockets", "public/system"

# Default value for default_env is {}
# set :default_env, { path: "/opt/ruby/bin:$PATH" }

# Default value for local_user is ENV['USER']
# set :local_user, -> { `git config user.name`.chomp }

# Default value for keep_releases is 5
# set :keep_releases, 5
