Usage example:

In sites/default/services.yml change

  factory.keyvalue:
    {}   

to:

  factory.keyvalue:
    migrate_status: keyvalue.blackhole

and then you don't need to bother with migrate-reset-status.
