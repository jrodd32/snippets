desc "Moves vendor and bootstrap to release"
namespace :shared_files do
    task :move do
        on roles(:all) do
            execute "cp -r #{fetch(:deploy_to)}/vendor #{fetch(:release_path)}"
            execute "cp -r #{fetch(:deploy_to)}/bootstrap #{fetch(:release_path)}"
            execute "cp #{fetch(:deploy_to)}/.env #{fetch(:release_path)}"
        end
        invoke 'shared_files:create_log'
    end

    task :create_log do
        on roles(:all) do
            execute "cd #{fetch(:release_path)}/storage/logs/ && sudo touch laravel.log && sudo chown www-data:www-data laravel.log && sudo chmod 775 laravel.log"
        end
    end
end
