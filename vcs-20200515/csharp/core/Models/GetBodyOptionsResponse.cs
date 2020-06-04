// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Vcs20200515.Models
{
    public class GetBodyOptionsResponse : TeaModel {
        [NameInMap("Code")]
        [Validation(Required=true)]
        public string Code { get; set; }

        [NameInMap("Message")]
        [Validation(Required=true)]
        public string Message { get; set; }

        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Data")]
        [Validation(Required=true)]
        public List<GetBodyOptionsResponseData> Data { get; set; }
        public class GetBodyOptionsResponseData : TeaModel {
            [NameInMap("Key")]
            [Validation(Required=true)]
            public string Key { get; set; }

            [NameInMap("Name")]
            [Validation(Required=true)]
            public string Name { get; set; }

            [NameInMap("OptionList")]
            [Validation(Required=true)]
            public List<GetBodyOptionsResponseDataOptionList> OptionList { get; set; }
            public class GetBodyOptionsResponseDataOptionList : TeaModel {
                [NameInMap("Key")]
                [Validation(Required=true)]
                public string Key { get; set; }

                [NameInMap("Name")]
                [Validation(Required=true)]
                public string Name { get; set; }

            }

        }

    }

}
