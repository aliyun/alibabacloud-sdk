// This file is auto-generated, don't edit it. Thanks.

using System;
using System.Collections.Generic;
using System.IO;

using Tea;

namespace AlibabaCloud.SDK.Rds20140815.Models
{
    public class DescribeCharacterSetNameResponse : TeaModel {
        [NameInMap("RequestId")]
        [Validation(Required=true)]
        public string RequestId { get; set; }

        [NameInMap("Engine")]
        [Validation(Required=true)]
        public string Engine { get; set; }

        [NameInMap("CharacterSetNameItems")]
        [Validation(Required=true)]
        public DescribeCharacterSetNameResponseCharacterSetNameItems CharacterSetNameItems { get; set; }
        public class DescribeCharacterSetNameResponseCharacterSetNameItems : TeaModel {
            [NameInMap("CharacterSetName")]
            [Validation(Required=true)]
            public List<string> CharacterSetName { get; set; }
        };

    }

}
