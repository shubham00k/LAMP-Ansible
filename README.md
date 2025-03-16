# LAMP Stack Deployment with Ansible
Automates LAMP stack deployment on AlmaLinux (VirtualBox) and Ubuntu (AWS EC2) using Ansible. Hosts a simple PHP to-do list app.

## Prerequisites
- Ansible on your local machine.
- AlmaLinux in VirtualBox with SSH.
- Ubuntu EC2 instance on AWS with SSH.

## Usage
1. Update `inventory/` files with your IPs and key paths.
2. Run: `ansible-playbook -i inventory/<hosts_file> playbook.yml`