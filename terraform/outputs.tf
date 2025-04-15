output "alb_dns_name" {
  description = "The DNS name of the load balancer"
  value       = aws_lb.wordpress_alb.dns_name
}

output "rds_endpoint" {
  description = "The connection endpoint for the RDS database"
  value       = aws_db_instance.wordpress_db.endpoint
}

output "cloudfront_domain_name" {
  description = "The domain name of the CloudFront distribution"
  value       = aws_cloudfront_distribution.wordpress_cdn.domain_name
}

output "s3_bucket_name" {
  description = "The name of the S3 bucket for WordPress media"
  value       = aws_s3_bucket.wordpress_media.bucket
}