# Proyecto
Proyecto<br />
CREADOR:HERRERA BARRIOS IVAN <br />
NOTAS: <br />
POLICIES <br />
1 necesitas saber que jugador solo puedes editar o eliminar si tiene el mismo id de usuario, es<br />
decir si tu id user es 1, solo puedes manipular a jugadores con llave(user_id) 1, perooo si puedes ver todos los jugadores <br /> 
que tenga la base de datos<br /> 
2 necesitas saber que lider solo puedes editar o eliminar si tiene el mismo nombre de usuario,es <br /> 
decir si el nombre de user es SAMY, puedes manipular los lideres que se llamen SAMY peroo si puedes ver todos los lideres de la bd<br />
3 En lo dicho anterior es obligatorio poner el user SIEMPRE ESTE EN MAYUSCULA, debido a que en lider se usaron accesors y muttators.<br />
SCHEDULE: <br />
Eliminara la tabla liders,si ejecutas php artisan (el nombre del comando) se llama micomando:hora, en kernel se puede ver el <br /> 
comando junto con hourly() <br /> 
CONSTRAITING EAGER LOAD(CEL) y SEEDER<br /> 
En Items se aplico el seeder y CEL, este ultimo va a mostrar el tipo del pet relacionado(relacion 1:n con pet) solo si en <br /> 
el nombre del tipo se encuentra la letra o.<br /> 
SOFT DELTE Y TIMESTAMPS <br />
Se encuentran en Jugador. <br /> 
RELACIONES 1:N <br />
1 USER/PET <br />
2 USER/JUGADOR <br />
3 ITEM/PET <br /> 
RELACIONES N:M <br />
1 LIDER/JUGADOR <br />
RELACIONES POLI <br />
1 LLIDER/ARCHIVO <br />
2 JUGADOR/ARCHIVO  <br /> 
<SELECT2> 
Para el uso de script 2 use select2 peroo se debe usar uno especial si quieres editar, por tal motivo se implemento<br /> 
dos vistas para el formulario, uno con script normal y otro para editar <br />
