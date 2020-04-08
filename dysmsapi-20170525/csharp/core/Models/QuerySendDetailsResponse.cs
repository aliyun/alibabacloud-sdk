// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Dysmsapi20170525.Models
{
    public class QuerySendDetailsResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("TotalCount")]
        [Validation(Required=true)]
        public string TotalCount { get; set; }

        [NameInMap("SmsSendDetailDTOs")]
        [Validation(Required=true)]
        public QuerySendDetailsResponseSmsSendDetailDTOs SmsSendDetailDTOs { get; set; }
        public class QuerySendDetailsResponseSmsSendDetailDTOs : TeaModel {
            [NameInMap("SmsSendDetailDTO")]
            [Validation(Required=true)]
            public List<QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO> SmsSendDetailDTO { get; set; }
            public class QuerySendDetailsResponseSmsSendDetailDTOsSmsSendDetailDTO : TeaModel {
                    public string PhoneNum { get; set; }
                    public long SendStatus { get; set; }
                    public string ErrCode { get; set; }
                    public string TemplateCode { get; set; }
                    public string Content { get; set; }
                    public string SendDate { get; set; }
                    public string ReceiveDate { get; set; }
                    public string OutId { get; set; }
            }
        };

    }

}
