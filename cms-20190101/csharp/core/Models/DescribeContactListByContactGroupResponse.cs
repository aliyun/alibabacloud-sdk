// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeContactListByContactGroupResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Contacts")]
        [Validation(Required=true)]
        public DescribeContactListByContactGroupResponseContacts Contacts { get; set; }
        public class DescribeContactListByContactGroupResponseContacts : TeaModel {
            [NameInMap("Contact")]
            [Validation(Required=true)]
            public List<DescribeContactListByContactGroupResponseContactsContact> Contact { get; set; }
            public class DescribeContactListByContactGroupResponseContactsContact : TeaModel {
                    public string Name { get; set; }
                    public string Desc { get; set; }
                    public long CreateTime { get; set; }
                    public long UpdateTime { get; set; }
                    public DescribeContactListByContactGroupResponseContactsContactChannels Channels { get; set; }
                    public class DescribeContactListByContactGroupResponseContactsContactChannels : TeaModel {
                        [NameInMap("SMS")]
                        [Validation(Required=true)]
                        public string SMS { get; set; }

                        [NameInMap("Mail")]
                        [Validation(Required=true)]
                        public string Mail { get; set; }

                        [NameInMap("AliIM")]
                        [Validation(Required=true)]
                        public string AliIM { get; set; }

                        [NameInMap("DingWebHook")]
                        [Validation(Required=true)]
                        public string DingWebHook { get; set; }

                    }
            }
        };

    }

}
