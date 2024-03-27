#Pokemon Site:

###Hoe seed je de data naar de Database:

  #####Ga als eerst in het mapje pokemon:

    $ cd pokemon

  #####Daarna seed the data met de volgende commands:

    $ php artisan db:seed --class=UserSeeder
    $ php artisan db:seed --class=PokemonSeeder
  
