<?php
include 'db.php';

// Ensure UTF-8 connection
$conn->set_charset("utf8mb4");

// 1. Truncate table to remove duplicates
$conn->query("TRUNCATE TABLE specialties");

// 2. Insert valid data
$sql = "INSERT INTO specialties (name, icon, profile_in, profile_out, work_field) VALUES
('Contabilidad', 'fas fa-calculator', 'Interés por los números, orden y organización.', 'Registra operaciones contables, fiscales y financieras de las empresas.', 'Despachos contables, bancos, empresas públicas y privadas.'),
('Programación', 'fas fa-laptop-code', 'Gusto por la tecnología, lógica y resolución de problemas.', 'Desarrolla software de aplicación, páginas web y bases de datos.', 'Empresas de desarrollo de software, departamentos de TI, freelance.'),
('Laboratorio Clínico', 'fas fa-microscope', 'Interés por la biología, química y salud.', 'Realiza análisis clínicos y maneja equipo de laboratorio.', 'Laboratorios clínicos, hospitales, bancos de sangre.'),
('Mecánica Industrial', 'fas fa-cogs', 'Habilidad manual, interés por máquinas y herramientas.', 'Mantiene y repara maquinaria industrial, maneja tornos y fresadoras.', 'Industria manufacturera, talleres de maquinado, mantenimiento.'),
('Preparación de Alimentos y Bebidas', 'fas fa-utensils', 'Gusto por la cocina, higiene y servicio al cliente.', 'Prepara alimentos y bebidas con estándares de calidad e higiene.', 'Hoteles, restaurantes, comedores industriales, cruceros.'),
('Servicios de Hospedaje', 'fas fa-hotel', 'Facilidad de palabra, servicio al cliente e idiomas.', 'Atiende al huésped, gestiona reservaciones y servicios hoteleros.', 'Hoteles, agencias de viajes, sector turístico.'),
('Logística', 'fas fa-truck-loading', 'Capacidad de organización, planeación y control.', 'Gestiona el flujo de mercancías, almacenes y transporte.', 'Empresas de transporte, almacenes, aduanas, centros de distribución.')";

if ($conn->query($sql) === TRUE) {
    echo "SUCCESS: Specialties table reset. Duplicates removed. Data re-inserted with UTF-8.";
} else {
    echo "ERROR: " . $conn->error;
}

$conn->close();
?>
