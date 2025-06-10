Docker images for replicating appropedia.org wiki.
==================================================

Docker images in this repository:
- Minimal local image: Includes the mediawiki server configured to run locally. Includes text
  from articles only. Images and files are accessed from appropedia.org directly.

Instrucctions for building and running the minimal local image.
---------------------------------------------------------------
  - Acquire a backup file with the text contents of the wiki.
  - Build the image by running docker compose with the following command. Make sure to change the
    BACKUP_FILE build argument to the file you obtained in the previous step.

    ```
    $ docker compose build local-minimal --build-arg BACKUP_FILE={my_backup.xml.gz}
    ```

    Alternatively and for simplicity, you can rename the backup file to `current-text.xml.gz` and
    then execute the same command without specifying it:

    ```
    $ docker compose build local-minimal
    ```

  - Start a container with the following command:

    ```
    $ docker compose up -d local-minimal
    ```

  - Visit your local server with your browser by using the address http://localhost/
