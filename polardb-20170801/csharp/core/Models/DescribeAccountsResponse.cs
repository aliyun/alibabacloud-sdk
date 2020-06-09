// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Polardb20170801.Models
{
    public class DescribeAccountsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Accounts")]
        [Validation(Required=true)]
        public List<DescribeAccountsResponseAccounts> Accounts { get; set; }
        public class DescribeAccountsResponseAccounts : TeaModel {
            [NameInMap("AccountName")]
            [Validation(Required=true)]
            public string AccountName { get; set; }

            [NameInMap("AccountStatus")]
            [Validation(Required=true)]
            public string AccountStatus { get; set; }

            [NameInMap("AccountDescription")]
            [Validation(Required=true)]
            public string AccountDescription { get; set; }

            [NameInMap("AccountType")]
            [Validation(Required=true)]
            public string AccountType { get; set; }

            [NameInMap("AccountLockState")]
            [Validation(Required=true)]
            public string AccountLockState { get; set; }

            [NameInMap("PrivilegeExceeded")]
            [Validation(Required=true)]
            public string PrivilegeExceeded { get; set; }

            [NameInMap("AccountPasswordValidTime")]
            [Validation(Required=true)]
            public string AccountPasswordValidTime { get; set; }

            [NameInMap("DatabasePrivileges")]
            [Validation(Required=true)]
            public List<DescribeAccountsResponseAccountsDatabasePrivileges> DatabasePrivileges { get; set; }
            public class DescribeAccountsResponseAccountsDatabasePrivileges : TeaModel {
                [NameInMap("DBName")]
                [Validation(Required=true)]
                public string DBName { get; set; }

                [NameInMap("AccountPrivilege")]
                [Validation(Required=true)]
                public string AccountPrivilege { get; set; }

            }

        }

    }

}
