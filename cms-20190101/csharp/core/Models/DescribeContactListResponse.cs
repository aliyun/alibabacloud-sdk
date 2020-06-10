// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Cms20190101.Models
{
    public class DescribeContactListResponse : TeaModel {
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

        [NameInMap("Contacts")]
        [Validation(Required=true)]
        public DescribeContactListResponseContacts Contacts { get; set; }
        public class DescribeContactListResponseContacts : TeaModel {
            [NameInMap("Contact")]
            [Validation(Required=true)]
            public List<DescribeContactListResponseContactsContact> Contact { get; set; }
            public class DescribeContactListResponseContactsContact : TeaModel {
                    public string Name { get; set; }
                    public string Desc { get; set; }
                    public long CreateTime { get; set; }
                    public long UpdateTime { get; set; }
                    public DescribeContactListResponseContactsContactChannels Channels { get; set; }
                    public class DescribeContactListResponseContactsContactChannels : TeaModel {
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
                    public DescribeContactListResponseContactsContactChannelsState ChannelsState { get; set; }
                    public class DescribeContactListResponseContactsContactChannelsState : TeaModel {
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
                    public DescribeContactListResponseContactsContactContactGroups ContactGroups { get; set; }
                    public class DescribeContactListResponseContactsContactContactGroups : TeaModel {
                        [NameInMap("ContactGroup")]
                        [Validation(Required=true)]
                        public List<string> ContactGroup { get; set; }

                    }
            }
        };

    }

}
