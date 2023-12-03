-- Insertar datos de prueba con contraseñas hasheadas
INSERT INTO usuarios (documento, apellidos, nombres, correo_electronico, contrasena, direccion, telefono) 
VALUES 
('123456789', 'Pérez', 'Juan', 'juan.perez@example.com', '$2y$10$9uk5szESqKFTi5M24SHsCOs8ZOQGXj3al2v9HtrXOH6dj17L1BKam', 'Calle 123', '123-456-7890'),
('987654321', 'López', 'María', 'maria.lopez@example.com', '$2y$10$NfwVKXQbkeBD01IufPmlwuOeeAe48yrh/JmZExvQ6rzwN4cQIf5ji', 'Avenida 456', '987-654-3210');