<?php namespace dlcrush\DBug;

    use Illuminate\Support\ServiceProvider;
    use dlcrush\DBug\DBug;
    
    /**
     * Service provider for dBug object
     *
     * Service provider for dBug object
     *
     * @author David Crush
     * @verson v1.1.0
     */
    class DBugServiceProvider extends ServiceProvider 
    {
        /**
         * Registers the dBug object
         * 
         * @return Auth instance of the dBug object
         */
        public function register() {
            \App::bind('DBug', function(){
                return new DBug;
            });
        }
    }
?>