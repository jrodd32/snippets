desc "Sets permissions on the storage/framework/views"
namespace :permissions do
    task :views do
        on roles(:all) do
            execute "sudo chmod -R 777 #{fetch(:release_path)}/storage/framework/"
        end
    end
end
