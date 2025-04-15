terraform {
  backend "s3" {
    bucket         = "terraform-state-wp-442042532026"
    key            = "wordpress/terraform.tfstate"
    region         = "ap-northeast-2"
    encrypt        = true
    dynamodb_table = "terraform-state-lock"
  }
}