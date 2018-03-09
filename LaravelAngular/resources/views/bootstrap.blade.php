<html>
<head>
    <title>Angular 2 + Laravel 5</title>

    {{ Html::script('project/node_modules/angular2/bundles/angular2-polyfills.js') }}
    {{ Html::script('project/node_modules/systemjs/dist/system.src.js') }}
    {{ Html::script('project/node_modules/rxjs/bundles/Rx.js') }}
    {{ Html::script('project/node_modules/angular2/bundles/angular2.js') }}
    {{ Html::script('project/node_modules/angular2/bundles/router.js') }}
    {{ Html::script('project/node_modules/angular2/bundles/http.js') }}

    <script>
        System.config({
            packages: {
                'project': {
                    format: 'register',
                    defaultExtension: 'js'
                }
            }
        });
        System.import('project/app/boot')
            .then(null, console.error.bind(console));
    </script>
</head>

<body>
    <angular2-laravel></angular2-laravel>
</body>
</html>
