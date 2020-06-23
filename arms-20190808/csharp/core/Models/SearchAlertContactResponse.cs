// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.ARMS20190808.Models
{
    public class SearchAlertContactResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("PageBean")]
        [Validation(Required=true)]
        public SearchAlertContactResponsePageBean PageBean { get; set; }
        public class SearchAlertContactResponsePageBean : TeaModel {
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public int? TotalCount { get; set; }
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public int? PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public int? PageSize { get; set; }
            [NameInMap("Contacts")]
            [Validation(Required=true)]
            public List<SearchAlertContactResponsePageBeanContacts> Contacts { get; set; }
            public class SearchAlertContactResponsePageBeanContacts : TeaModel {
                    public long ContactId { get; set; }
                    public string ContactName { get; set; }
                    public string Phone { get; set; }
                    public string Email { get; set; }
                    public string UserId { get; set; }
                    public string DingRobot { get; set; }
                    public long CreateTime { get; set; }
                    public long UpdateTime { get; set; }
                    public bool? SystemNoc { get; set; }
            }
        };

    }

}
