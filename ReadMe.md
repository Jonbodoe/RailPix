Current Functionalities

- You can start with a brand new account or use an existing
    - Register as a new user
    - Add personal information such as profile image, bio, and name
- Have access to view admin pages such as dashboard, catalog, profile, and searching
- You can also view other peoples profile pages with their photo
- You can upload photos with a brand new account or existing
    - Add details such as description, state, division, and freight type
- Add comments to individual pages
    - You can only edit your own comments and "flag" other users comments
    - You can edit and delete your own comments on anyones posts you commented on
- For the catalog page, you can search for the title of the post as well as the description.
    - It is possible to use all search, division and type forms however there are limitations *
    - You can go to the individual posts from the catalog

To get started, you can either create an account or start with an existing account:
Username: Jonbodoe
Password: ##yearight

Some things worth noting:

- I havent added user's choice of adding google maps or not, only the photos that have the google maps will be the first 4 posts.
- The pages are not fully responsive past < 700px width of the screen.
- When filtering, there isnt enough data that will satisfy all combinations of divisions and types, however you can use both or all three if you can find one
- AJAX is not present in the project, however i will work on the UX over break to polish the product more

Structure:
- Assets folder: common HTML elements such as navbar, footer, etc. No php logic or js.
- Data folder: files that grab data from the database or other php logic that are occuring without the database
- Img folder: all the files that are used and uploaded are in this file, when creating an account you can re-use these images