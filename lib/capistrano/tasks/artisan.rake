desc "Moves composer to release"
namespace :artisan do
    task :cache do
        on roles(:all) do
            execute "cd #{fetch(:release_path)} && php artisan route:clear && php artisan config:clear && php artisan view:clear"
        end
    end
end

