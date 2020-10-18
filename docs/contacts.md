# Ithium 

# Contacts resource [/contacts]

+ Request (application/json)
    + Headers
    Authorization: Bearer your_token_here

+ Response 200 (application/json)
    + Body
    ```json
        {
            "data": [
            {
                "name": "foo",
                    "email": "foo@bar.com",
                    "socials": {
                        "data": {
                            "facebook": "facebook.com/foo",
                            "linkedin": "linkedin.com/bar"
                        }
                    },
                    "telephone": {
                        "data": {
                            "id": 1,
                            "phone_number": "123",
                            "phone_type": "Residential"
                        }
                    }
            }
            // ...
            ],
            "meta": {
                "pagination": {
                    "total": 9,
                    "count": 9,
                    "per_page": 25,
                    "current_page": 1,
                    "total_pages": 1,
                    "links": {}
                }
            }
        }
    ```

## Store a newly created resource in storage. [POST /contacts]
+ Request 200 (application/json)
    + Headers
        Authorization: Bearer your_token_here
    + Body
        ```json
        {
            "name": "foo",
            "email": "foo@bar.com",
            "socials": {
                    "facebook": "facebook.com/foo",
                    "linkedin": "linkedin.com/bar"
            },
            "telephone": {
                    "phone_number": "0987",
                    "phone_type_id": 1
            }
        }
        ```

+ Response 201 (application/json)
    + Body
        ```json
            {
                "message": "Entity created",
                "status_code": 201
            }
        ```

+ Response 422 (application/json)
    + Body

        ```json
            {
                "message": "422 Unprocessable Entity",
                "errors": [],
                "status_code": 422
            }
        ```

+ Response 403 (application/json)
    + Body
        ```json
            {
                "message": "403 Forbidden",
                "status_code": 403
            }
        ```

## Display the specified resource. [GET /contacts/{id}]

+ Request (application/json)
    + Headers
            Authorization: Bearer your_token_here

+ Request 200 (application/json)
    + Headers
        Authorization: Bearer your_token_here
    + Body
        ```json
            {
              "data": {
                "name": "foo",
                "email": "foo@bar.com",
                "socials": {
                  "data": {
                    "facebook": "facebook.com/foo",
                    "linkedin": "linkedin.com/bar"
                  }
                },
                "telephone": {
                  "data": {
                    "id": 1,
                    "phone_number": "123",
                    "phone_type": "Comertial"
                  }
                }
              }
            }
        ```

+ Response 404 (application/json)
    + Body
        ```json
            {
                "message": "No query results for model",
                "status_code": 404
            }
        ```

+ Response 401 (application/json)
    + Body
        ```json
            {
                "message": "The token has been blacklisted",
                "status_code": 401
            }
        ```

## Update the specified resource in storage. [PUT /users/{id}]

+ Request 200 (application/json)
    + Headers
        Authorization: Bearer your_token_here

    + Body
        ```json
            {
              "data": {
                "name": "foo",
                "email": "foo@bar.com",
                "socials": {
                  "data": {
                    "facebook": "facebook.com/foo",
                    "linkedin": "linkedin.com/bar"
                  }
                },
                "telephone": {
                  "data": {
                    "id": 1,
                    "phone_number": "8176",
                    "phone_type": "Comertial"
                  }
                }
              }
            }
        ```

+ Response 422 (application/json)
    + Body
        ```json
            {
                "message": "422 Unprocessable Entity",
                "errors": [],
                "status_code": 422
            }
        ```

+ Response 404 (application/json)
    + Body
        ```json
            {
                "message": "No query results for model",
                "status_code": 404
            }
        ```

+ Response 403 (application/json)
    + Body
        ```json
            {
                "message": "403 Forbidden",
                "status_code": 403
            }
        ```

+ Response 401 (application/json)
    + Body
        ```json
            {
                "message": "The token has been blacklisted",
                "status_code": 401
            }
        ```

## Remove the specified resource from storage. [DELETE /contacts/{id}]

+ Request (application/json)
    + Headers
        Authorization: Bearer your_token_here

+ Response 202 (application/json)
    + Body
        ```json
            {
                "message": "Entity deleted",
                "status_code": 202
            }
        ```

+ Response 404 (application/json)
    + Body
        ```json
            {
                "message": "No query results for model",
                "status_code": 404
            }
        ```

+ Response 401 (application/json)
    + Body
        ```json
            {
                "message": "The token has been blacklisted",
                "status_code": 401
            }
        ```
