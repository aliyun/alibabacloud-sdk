// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dataworks_public20200518.Models
{
    public class ListAlertMessagesResponse : TeaModel {
        [NameInMap("Success")]
        [Validation(Required=true)]
        public bool? Success { get; set; }

        [NameInMap("ErrorCode")]
        [Validation(Required=true)]
        public string ErrorCode { get; set; }

        [NameInMap("ErrorMessage")]
        [Validation(Required=true)]
        public string ErrorMessage { get; set; }

        [NameInMap("HttpStatusCode")]
        [Validation(Required=true)]
        public int? HttpStatusCode { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public ListAlertMessagesResponseData Data { get; set; }
        public class ListAlertMessagesResponseData : TeaModel {
            [NameInMap("PageNumber")]
            [Validation(Required=true)]
            public string PageNumber { get; set; }
            [NameInMap("PageSize")]
            [Validation(Required=true)]
            public string PageSize { get; set; }
            [NameInMap("TotalCount")]
            [Validation(Required=true)]
            public string TotalCount { get; set; }
            [NameInMap("AlertMessages")]
            [Validation(Required=true)]
            public List<ListAlertMessagesResponseDataAlertMessages> AlertMessages { get; set; }
            public class ListAlertMessagesResponseDataAlertMessages : TeaModel {
                    public long AlertId { get; set; }
                    public long AlertTime { get; set; }
                    public string Source { get; set; }
                    public long RemindId { get; set; }
                    public string RemindName { get; set; }
                    public string AlertUser { get; set; }
                    public string AlertMethod { get; set; }
                    public string AlertMessageStatus { get; set; }
                    public string Content { get; set; }
                    public List<ListAlertMessagesResponseDataAlertMessagesInstances> Instances { get; set; }
                    public class ListAlertMessagesResponseDataAlertMessagesInstances : TeaModel {
                            public long NodeId { get; set; }
                            public string NodeName { get; set; }
                            public long ProjectId { get; set; }
                            public string Status { get; set; }
                            public long InstanceId { get; set; }
                    }
                    public List<ListAlertMessagesResponseDataAlertMessagesTopics> Topics { get; set; }
                    public class ListAlertMessagesResponseDataAlertMessagesTopics : TeaModel {
                            public long NodeId { get; set; }
                            public long InstanceId { get; set; }
                            public long TopicId { get; set; }
                            public string TopicName { get; set; }
                            public string TopicOwner { get; set; }
                            public string TopicStatus { get; set; }
                    }
                    public List<ListAlertMessagesResponseDataAlertMessagesNodes> Nodes { get; set; }
                    public class ListAlertMessagesResponseDataAlertMessagesNodes : TeaModel {
                            public long NodeId { get; set; }
                            public string NodeName { get; set; }
                            public string Owner { get; set; }
                            public long ProjectId { get; set; }
                    }
                    public ListAlertMessagesResponseDataAlertMessagesSlaAlert SlaAlert { get; set; }
                    public class ListAlertMessagesResponseDataAlertMessagesSlaAlert : TeaModel {
                        [NameInMap("BaselineId")]
                        [Validation(Required=true)]
                        public long BaselineId { get; set; }

                        [NameInMap("BaselineName")]
                        [Validation(Required=true)]
                        public string BaselineName { get; set; }

                        [NameInMap("BaselineOwner")]
                        [Validation(Required=true)]
                        public string BaselineOwner { get; set; }

                        [NameInMap("Bizdate")]
                        [Validation(Required=true)]
                        public long Bizdate { get; set; }

                        [NameInMap("InGroupId")]
                        [Validation(Required=true)]
                        public int? InGroupId { get; set; }

                        [NameInMap("ProjectId")]
                        [Validation(Required=true)]
                        public long ProjectId { get; set; }

                        [NameInMap("Status")]
                        [Validation(Required=true)]
                        public string Status { get; set; }

                    }
            }
        };

    }

}
