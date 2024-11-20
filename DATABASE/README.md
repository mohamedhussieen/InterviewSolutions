# DATABASE

This folder contains the entity-relationship diagram (ERD) for a dental clinic system.

## ERD Overview
The database design covers:
1. **Dentist**: Stores details about dentists.
2. **Room**: Tracks room assignments for each dentist.
3. **Client (Patient)**: Contains information about clients.
4. **Payment**: Tracks whether a client is insured or self-paying.
5. **Appointment**: Stores appointment details for each client.

## Diagram
- The ERD visualizes relationships:
  - One-to-Many: `Dentist` → `Room`
  - One-to-Many: `Dentist` → `Client`
  - One-to-One: `Client` → `Payment`
  - One-to-Many: `Client` → `Appointment`

## How to View the Diagram
The diagram is saved as `dental_clinic_erd.png` in this folder.

## Assumptions
1. Each dentist can handle multiple rooms and clients.
2. Clients are either insured or self-paying, but not both.
3. Appointments track specific visit details for each client.

