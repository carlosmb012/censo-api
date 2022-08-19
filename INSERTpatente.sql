INSERT INTO public.pat_actividads (id, id_act, descrip) VALUES (1, 1, 'PELUQUERIAS');
INSERT INTO public.pat_actividads (id, id_act, descrip) VALUES (2, 2, 'PANADERIAS');
INSERT INTO public.pat_actividads (id, id_act, descrip) VALUES (3, 3, 'HELADERIAS');

INSERT INTO public.pat_condicions (id, id_cond, descrip) VALUES 
(1, 1, 'Cuenta con servicios de agua, electricidad y los que resulten esenciales para el desarrollo de actividades, debidamente instalados');
INSERT INTO public.pat_condicions (id, id_cond, descrip) VALUES 
(2, 2, 'Cuenta con mobiliario basico e instalado para el desarrollo de la actividad');
INSERT INTO public.pat_condicions (id, id_cond, descrip) VALUES 
(3, 3, 'Cuenta con servicios sanitarios, de drenaje, e inmobiliario basico para el desarrollo de la actividad');

INSERT INTO public.pat_visita_programs (id, fecha_visita, user_id, ciudad_id) VALUES (1, '2021-01-18', 1, 7990101);
INSERT INTO public.pat_visita_programs (id, fecha_visita, user_id, ciudad_id) VALUES (2, '2021-01-18', 1, 7990101);

INSERT INTO public.patentes (id, estado, observac_dada, latitud, longitud, cod_pat, raz_soc_pat, fecha_inicio, edificio, superficie, ambulante, tipo_calle, direccion, cod_uv, cod_man, cod_pred, cod_blq, cod_piso, cod_apto, email, telefono1, telefono2, observaciones, ciudad_id, visita_program_id, pat_actividades_id) 
VALUES (1, 'Sin Procesar', '-', -22.013682769425099, -63.681248761214398, '123', 'PELUQUERIA NANCY', '2012-12-12', 'nose', 12.87, 0, '-', 'Barrio Calama C/Aroma', 1, 2, 3, 4, 5, 6, 'ejemplo@gmail.com', 72349493, null, 'ninguna', 7990101, 1, 1);
