desc "Build front-end assets"
namespace :front_end do
    task :upload_node_modules do
        run_locally do
            execute "scp -r node_modules jlong@doe1915.com:/home/jlong"
        end
    end

    task :move_node_modules do
        on roles(:all) do
            execute "sudo cp -r /home/jlong/node_modules #{fetch(:release_path)}"
            execute "cd #{fetch(:release_path)} && npm run production"
        end
    end

    task :move_built_files do
        run_locally do
            execute "scp -r public/css jlong@doe1915.com:/home/jlong"
            execute "scp -r public/js jlong@doe1915.com:/home/jlong"
        end

        on roles(:all) do
            execute "sudo chown -R doe:doe /home/jlong/css /home/jlong/js"
            execute "sudo cp -r /home/jlong/css #{fetch(:release_path)}/public/"
            execute "sudo cp -r /home/jlong/js #{fetch(:release_path)}/public/"
        end
    end
end
