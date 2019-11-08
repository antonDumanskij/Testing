SELECT requests.name, requests_info.value
FROM requests_info
JOIN requests ON requests_info.request_id=requests.id
WHERE requests_info.name = 'email' and requests_info.request_id IN (
            SELECT requests_info.request_id
            FROM requests_info
            WHERE requests_info.name = 'type'
                and requests_info.value = 'facebook'
                and creation_date >= '2018-01-01');