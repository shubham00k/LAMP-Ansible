# LAMP Stack Deployment with Ansible

This project automates the deployment of a LAMP stack (Linux, Apache, MySQL, PHP) on AlmaLinux (VirtualBox) and Ubuntu (AWS EC2) using Ansible. It deploys a simple PHP to-do list application.

## Features
- Multi-OS support (AlmaLinux and Ubuntu).
- Automated firewall configuration for HTTP access.
- PHP application deployment with task persistence.

## Prerequisites
- Ansible installed on the control node.
- AlmaLinux VM in VirtualBox with SSH access.
- Ubuntu EC2 instance on AWS with SSH access.

## Usage
1. Clone the repo: `git clone https://github.com/shubham00k/LAMP-Ansible.git`
2. Update `inventory/alma_hosts` and `inventory/ubuntu_aws_hosts` with your server IPs and key paths.
3. Run:
   - For AlmaLinux: `ansible-playbook -i inventory/alma_hosts playbook.yml -K`
   - For Ubuntu: `ansible-playbook -i inventory/ubuntu_aws_hosts playbook.yml`

## Project Structure
- `playbook.yml`: Main Ansible playbook.
- `roles/`: Reusable tasks for common, apache, mysql, and php setup.
- `files/todo-app/`: PHP to-do list app files.
- `inventory/`: Host definitions for AlmaLinux and Ubuntu.