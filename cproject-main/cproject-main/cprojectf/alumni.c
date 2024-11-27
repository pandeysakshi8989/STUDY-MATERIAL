#include <stdio.h>
#include <stdlib.h>
#include <string.h>
#include <stdbool.h>
#include <ctype.h>

struct alumni
{
	char roll_number[25];
    char name[30];
    char batch_year[5];
    char branch[5];
    char email[30];
    char phone_number[25];
};

FILE *fptr;

bool is_valid_roll_number (char *roll_number)
{
    for (int i = 0; i < strlen (roll_number); i++)
    {
        if (isalnum (roll_number[i]) == 0)
        {
            return false;
        }
    }
    return true;
}

bool is_valid_name_branch (char *name_branch)
{
    for (int i = 0; i < strlen (name_branch); i++)
    {
        if (isalpha (name_branch[i]) == 0 && name_branch[i] != ' ')
        {
            return false;
        }
    }
    return true;
}

bool is_valid_phone_batch (char *phone_batch)
{
    for (int i = 0; i < strlen (phone_batch); i++)
    {
        if (isdigit (phone_batch[i]) == 0)
        {
            return false;
        }
    }
    return true;
}

bool is_valid_email (char *email)
{
    int i, len = strlen(email);
    int at_count = 0, at_index = -1, dot_count = 0, dot_index = -1;
    for (i = 0; i < len; i++)
    {
        if (email[i] == '@')
        {
            at_count++; 
            at_index = i; 
        }
        else if (email[i] == '.')
        {
            dot_count++; 
            dot_index = i; 
        }
    }
    if (at_count != 1)
        return false;
    if (dot_count < 1 || dot_index < at_index)
        return false;
    if (dot_index == len - 1)
        return false;
    if (!isalpha(email[0]))
        return false;
    for (i = 0; i < len; i++)
    {
        if (!isalnum(email[i]) && email[i] != '@' && email[i] != '.' && email[i] != '_' && email[i] != '-')
            return false;
    }
    return true;
}

void add_entry()
{
    struct alumni temp;
    struct alumni *ptr = &temp;
    fptr = fopen("alumni.txt", "a+");
    if (fptr == NULL)
	{
        printf("Error opening file.\n");
        exit(1);
    }
    char choice; 
    do
    {
        printf("Enter roll number: ");
        scanf("%s", ptr->roll_number);
        if (!is_valid_roll_number (ptr->roll_number))
        {
            printf("Invalid roll number. Please enter a valid alphanumeric string.\n");
            continue; 
        }
        int found = 0; 
        struct alumni record; 
        rewind(fptr); 
        while (fread(&record, sizeof(struct alumni), 1, fptr) == 1) 
        {
            if (strcmp(record.roll_number, ptr->roll_number) == 0) 
            {
                found = 1; 
                break; 
            }
        }
        if (found == 1) 
        {
            printf("The roll number already exists. Please enter a different one.\n");
            continue; 
        }
        printf("Enter name: ");
        scanf(" %[^\n]s", ptr->name);
        if (!is_valid_name_branch (ptr->name))
        {
            printf("Invalid name. Please enter a valid alphabetical string.\n");
            continue;
        }
        printf("Enter batch year: "); 
        scanf("%s", ptr->batch_year);
        if (!is_valid_phone_batch (ptr->batch_year))
        {
            printf("Invalid batch year. Please enter a valid numeric string.\n");
            continue;
        }
        printf("Enter branch: ");
        scanf("%s", ptr->branch);
        if (!is_valid_name_branch (ptr->branch))
        {
            printf("Invalid branch. Please enter a valid alphabetical string.\n");
            continue;
        }
        printf("Enter email: ");
        scanf("%s", ptr->email);
        if (!is_valid_email (ptr->email))
        {
            printf("Invalid email. Please enter a valid email string.\n");
            continue;
        }
        printf("Enter phone number: ");
        scanf("%s", ptr->phone_number);
        if (!is_valid_phone_batch (ptr->phone_number))
        {
            printf("Invalid phone number. Please enter a valid numeric string.\n");
            continue;
        }
        fwrite(ptr, sizeof(struct alumni), 1, fptr);
        printf("Entry added successfully.\n");
        printf("Do you want to add another entry? (y/n): ");
        scanf(" %c", &choice);
    } while (choice == 'y' || choice == 'Y');
    fclose(fptr);
}

void delete_entry()
{
    struct alumni temp;
    struct alumni *ptr = &temp;
    int found = 0;
    char roll[25];
    printf("Enter roll number of the student to delete: ");
    scanf("%s", roll);
    fptr = fopen("alumni.txt", "r");
    if (fptr == NULL)
	{
        printf("Error opening file.\n");
        exit(1);
    }
    FILE *ftemp;
    ftemp = fopen("temp.txt", "w");
    if (ftemp == NULL)
	{
        printf("Error creating temporary file.\n");
        exit(1);
    }
    while (fread(ptr, sizeof(struct alumni), 1, fptr))
	{
        if (strcmp(ptr->roll_number,roll)==0)
		{
            found = 1;
        }
        else
		{
            fwrite(ptr, sizeof(struct alumni), 1, ftemp);
        }
    }
    fclose(fptr);
    fclose(ftemp);
    if (found)
	{
        remove("alumni.txt");
        rename("temp.txt", "alumni.txt");
        printf("Entry deleted successfully.\n");
    }
    else
	{
        remove("temp.txt");
        printf("Entry not found.\n");
    }
}

void search_entry()
{
    struct alumni temp;
    struct alumni *ptr = &temp;
    int found = 0;
    char roll[25];
    printf("Enter roll number of the student to search: ");
    scanf("%s", roll);
    fptr = fopen("alumni.txt", "r");
    if (fptr == NULL)
	{
        printf("Error opening file.\n");
        exit(1);
    }
    while (fread(ptr, sizeof(struct alumni), 1, fptr)) 
	{
        if (strcmp(ptr->roll_number,roll)==0)
		{
            found = 1;
            printf("Entry found.\n");
            printf("Roll number: %s\n", ptr->roll_number);
            printf("Student Name: %s\n", ptr->name);
            printf("Batch Year: %s\n", ptr->batch_year);
            printf("Branch: %s\n", ptr->branch);
            printf("Email: %s\n", ptr->email);
            printf("Phone Number: %s\n", ptr->phone_number);
            break;
        }
    }
    fclose(fptr);
    if (!found) 
	{
        printf("Entry not found.\n");
    }
}

void modify_entry() 
{
    struct alumni temp;
    struct alumni *ptr = &temp;
    int found = 0,ch;
    char roll[25];
    printf("Enter roll number of the student to modify: ");
    scanf("%s", roll);
    fptr = fopen("alumni.txt", "r+");
    if (fptr == NULL) 
	{
        printf("Error opening file.\n");
        exit(1);
    }
    while (fread(ptr, sizeof(struct alumni), 1, fptr))
	 {
        if (strcmp(ptr->roll_number,roll)==0){
            found = 1;
            printf("1.Name\t2.Email\t3.Phone Number\n");
            printf("Enter choice you want to modify:\n");
            scanf("%d",&ch);
            switch(ch){
            case 1:
            printf("Enter name: ");
            scanf(" %[^\n]s", ptr->name); 
              if (!is_valid_name_branch (ptr->branch))
            {
            printf("Invalid branch. Please enter a valid alphabetical string.\n");
            continue;
            }
            break;
            case 2:
            printf("Enter new email: ");
            scanf("%s", ptr->email);
             if (!is_valid_email (ptr->email))
            {
            printf("Invalid email. Please enter a valid email string.\n");
            continue;
            }
            break;
            case 3:
            printf("Enter new phone number: ");
            scanf("%s", ptr->phone_number);
            if (!is_valid_phone_batch (ptr->phone_number))
            {
            printf("Invalid phone number. Please enter a valid numeric string.\n");
            continue;
            }
            break;
            }
            fseek(fptr, -sizeof(struct alumni), SEEK_CUR);
            fwrite(ptr, sizeof(struct alumni), 1, fptr);
            printf("Entry modified successfully.\n");
            break;
        }
    }
    fclose(fptr);
    if (!found) 
	{
        printf("Entry not found\n");
    }
}

void display_all() 
{
    struct alumni temp;
    struct alumni *ptr = &temp;
    int found=0;
    fptr = fopen("alumni.txt", "r");
    if (fptr == NULL) 
	{
        printf("Error opening file.\n");
        exit(1);
    }
    printf("Roll Number\tStudent Name\tBatch\tBranch\tEmail Id\t\t\tPhone Number\n");
    while (fread(ptr, sizeof(struct alumni), 1, fptr)) 
	{
		found++;
        printf("%s\t%s\t%s\t%s\t%s\t%s\n", ptr->roll_number,ptr->name,ptr->batch_year,ptr->branch,ptr->email,ptr->phone_number);
    }
    fclose(fptr);
    if(!found)
    {
    	printf("Entry not found\n");
	}
}

void group_search()
{
    struct alumni temp;
    struct alumni *ptr = &temp;
    int found=0;
    char branch[5];
    char batch[5];
	printf("Enter batch year to search: ");
    scanf("%s", batch);
    printf("Enter branch to search: ");
    scanf("%s", branch);
    fptr = fopen("alumni.txt", "r");
    if (fptr == NULL) 
	{
        printf("Error opening file.\n");
        exit(1);
    }
    printf("Roll Number\tStudent Name\tBatch\tBranch\tEmail\t\t\tPhone Number\n");
    while (fread(ptr, sizeof(struct alumni), 1, fptr))
	{
        if ((strcmp(ptr->batch_year,batch)==0)&&(strcmp(ptr->branch,branch)==0))
		{
		found++;
        printf("%s\t%s\t%s\t%s\t%s\t%s\n", ptr->roll_number,ptr->name,ptr->batch_year,ptr->branch,ptr->email,ptr->phone_number);
        }
    }
    fclose(fptr);
    if(!found)
    {
    	printf("Entry not found\n");
	}
   
}

int menu()
{
    int choice;
    printf("\n--------------------------------------------\n");
    printf("Alumni Database Menu\n");
    printf("1. Add entry\n");
    printf("2. Delete entry\n");
    printf("3. Search entry\n");
    printf("4. Modify entry\n");
    printf("5. Display all entries\n");
    printf("6. Search by batch and branch\n");
    printf("7. Exit\n");
    printf("Enter your choice: ");
    scanf("%d", &choice);
    return choice;
}

int main()
{
	printf("Sakshi Pandey\tY23271024\n");
	printf("ALUMNI FILE SYSTEM\n");
    int choice;
    do {
        choice = menu();
        switch (choice) 
		{
            case 1:
                add_entry();
                break;
            case 2:
                delete_entry();
                break;
            case 3:
                search_entry();
                break;
            case 4:
                modify_entry();
                break;
            case 5:
                display_all();
                break;
            case 6:
            	group_search();
            	break;
            case 7:
                printf("Exiting the program\n");
                break;
            default:
                printf("Invalid choice\n");
                break;
        }
    } while (choice != 7);
    return 0;
}
