// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeContactGroupListResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("Total")]
        [Validation(Required=true)]
        public int? Total { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("ContactGroupList")]
        [Validation(Required=true)]
        public DescribeContactGroupListResponseContactGroupList ContactGroupList { get; set; }
        public class DescribeContactGroupListResponseContactGroupList : TeaModel {
            [NameInMap("ContactGroup")]
            [Validation(Required=true)]
            public List<DescribeContactGroupListResponseContactGroupListContactGroup> ContactGroup { get; set; }
            public class DescribeContactGroupListResponseContactGroupListContactGroup : TeaModel {
                    public string Name { get; set; }
                    public string Describe { get; set; }
                    public long CreateTime { get; set; }
                    public long UpdateTime { get; set; }
                    public bool? EnabledWeeklyReport { get; set; }
                    public bool? EnableSubscribed { get; set; }
                    public DescribeContactGroupListResponseContactGroupListContactGroupContacts Contacts { get; set; }
                    public class DescribeContactGroupListResponseContactGroupListContactGroupContacts : TeaModel {
                        [NameInMap("Contact")]
                        [Validation(Required=true)]
                        public List<string> Contact { get; set; }

                    }
            }
        };

        [NameInMap("ContactGroups")]
        [Validation(Required=true)]
        public DescribeContactGroupListResponseContactGroups ContactGroups { get; set; }
        public class DescribeContactGroupListResponseContactGroups : TeaModel {
            [NameInMap("ContactGroup")]
            [Validation(Required=true)]
            public List<string> ContactGroup { get; set; }
        };

    }

}
