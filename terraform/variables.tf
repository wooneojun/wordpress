variable "aws_region" {
  description = "The AWS region to deploy resources"
  default     = "ap-northeast-2" # 서울 리전
}

variable "vpc_cidr" {
  description = "CIDR block for the VPC"
  default     = "10.0.0.0/16"
}

variable "public_subnet_cidrs" {
  description = "CIDR blocks for the public subnets"
  type        = list(string)
  default     = ["10.0.1.0/24", "10.0.2.0/24"]
}

variable "private_subnet_cidrs" {
  description = "CIDR blocks for the private subnets"
  type        = list(string)
  default     = ["10.0.3.0/24", "10.0.4.0/24"]
}

variable "availability_zones" {
  description = "Availability zones"
  type        = list(string)
  default     = ["ap-northeast-2a", "ap-northeast-2c"]
}

variable "db_username" {
  description = "Username for the RDS instance"
  default     = "admin"
  sensitive   = true
}

variable "db_password" {
  description = "Password for the RDS instance"
  sensitive   = true
}

variable "ecr_repository_url" {
  description = "URL of the ECR repository for WordPress"
  type        = string
}