## Text-Snippet-Sharing-Service

```mermaid
erDiagram
  snipets {
    id bigint PK 
    title varchar(255) 
    content text 
    lang varchar(255) 
    deleted_at timestamp
    created_at timestamp
    updated_at timestamp
  }

```
　