USE 4693019_cbtis;



-- Table for Specialties (Carreras)
CREATE TABLE IF NOT EXISTS specialties (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT,
    icon VARCHAR(50) DEFAULT 'fas fa-graduation-cap',
    profile_in TEXT,
    profile_out TEXT,
    work_field TEXT
);

-- Table for Users
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Table for News
CREATE TABLE IF NOT EXISTS news (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(200) NOT NULL,
    content TEXT,
    image_url VARCHAR(255),
    publish_date DATE DEFAULT CURRENT_DATE
);

-- Table for Contact Messages
CREATE TABLE IF NOT EXISTS messages (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    subject VARCHAR(100),
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Insert Specialties for CBTIS 258 Mariano Escobedo
INSERT INTO specialties (name, icon, profile_in, profile_out, work_field) VALUES
('Contabilidad', 'fas fa-calculator', 'Interés por los números, orden y organización.', 'Registra operaciones contables, fiscales y financieras de las empresas.', 'Despachos contables, bancos, empresas públicas y privadas.'),
('Programación', 'fas fa-laptop-code', 'Gusto por la tecnología, lógica y resolución de problemas.', 'Desarrolla software de aplicación, páginas web y bases de datos.', 'Empresas de desarrollo de software, departamentos de TI, freelance.'),
('Mecánica Industrial', 'fas fa-cogs', 'Habilidad manual, interés por máquinas y herramientas.', 'Mantiene y repara maquinaria industrial, maneja tornos y fresadoras.', 'Industria manufacturera, talleres de maquinado, mantenimiento.'),
('Preparación de Alimentos y Bebidas', 'fas fa-utensils', 'Gusto por la cocina, higiene y servicio al cliente.', 'Prepara alimentos y bebidas con estándares de calidad e higiene.', 'Hoteles, restaurantes, comedores industriales, cruceros.'),
('Servicios de Hospedaje', 'fas fa-hotel', 'Facilidad de palabra, servicio al cliente e idiomas.', 'Atiende al huésped, gestiona reservaciones y servicios hoteleros.', 'Hoteles, agencias de viajes, sector turístico.'),
('Logística', 'fas fa-truck-loading', 'Capacidad de organización, planeación y control.', 'Gestiona el flujo de mercancías, almacenes y transporte.', 'Empresas de transporte, almacenes, aduanas, centros de distribución.');

-- Insert Dummy News
INSERT INTO news (title, content, image_url, publish_date) VALUES
('Inicio de Semestre Feb-Jul 2026', 'Damos la bienvenida a toda la comunidad estudiantil al nuevo ciclo escolar. Les deseamos mucho éxito en sus actividades académicas.', 'https://images.unsplash.com/photo-1523580494863-6f3031224c94?w=400&h=200&fit=crop', '2026-02-01'),
('Feria de Universidades 2025', 'Gran participación de nuestros alumnos de 6to semestre en la feria vocacional, donde conocieron la oferta educativa superior.', 'img/universidades.jpeg', '2025-11-20'),
('Ganadores en Concurso de Escoltas', 'Felicitamos a nuestra escolta oficial por obtener el primer lugar en el certamen estatal de DGETI.', 'img/escoltas.jpeg', '2025-10-15');


-- Table for Staff
CREATE TABLE IF NOT EXISTS staff (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    position VARCHAR(100),
    email VARCHAR(100),
    photo_url VARCHAR(255)
);

-- Insert Dummy Staff
INSERT INTO staff (name, position, email, photo_url) VALUES
('Ing. Juan Pérez', 'Director General', 'juan.perez@cbtis258.edu.mx', 'https://via.placeholder.com/150'),
('Lic. María González', 'Subdirectora Académica', 'maria.gonzalez@cbtis258.edu.mx', 'https://via.placeholder.com/150'),
('Dr. Carlos López', 'Jefe de Vinculación', 'carlos.lopez@cbtis258.edu.mx', 'https://via.placeholder.com/150'),
('Mtra. Ana Martínez', 'Servicios Escolares', 'ana.martinez@cbtis258.edu.mx', 'https://via.placeholder.com/150');
